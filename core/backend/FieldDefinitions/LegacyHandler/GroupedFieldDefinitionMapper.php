<?php
/**
 * SuiteCRM is a customer relationship management program developed by SalesAgility Ltd.
 * Copyright (C) 2021 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SALESAGILITY, SALESAGILITY DISCLAIMS THE
 * WARRANTY OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License
 * version 3, these Appropriate Legal Notices must retain the display of the
 * "Supercharged by SuiteCRM" logo. If the display of the logos is not reasonably
 * feasible for technical reasons, the Appropriate Legal Notices must display
 * the words "Supercharged by SuiteCRM".
 */


namespace App\FieldDefinitions\LegacyHandler;

use App\FieldDefinitions\Entity\FieldDefinition;

class GroupedFieldDefinitionMapper implements FieldDefinitionMapperInterface, GroupedFieldDefinitionMapperInterface
{
    /**
     * @var array
     */
    private $groupedFieldsTypeMap;

    /**
     * GroupedFieldDefinitionMapper constructor.
     * @param array $groupedFieldsTypeMap
     */
    public function __construct(array $groupedFieldsTypeMap)
    {
        $this->groupedFieldsTypeMap = $groupedFieldsTypeMap;
    }

    /**
     * @inheritDoc
     */
    public function getKey(): string
    {
        return 'grouped-fields';
    }

    /**
     * @inheritDoc
     */
    public function getModule(): string
    {
        return 'default';
    }

    /**
     * @inheritDoc
     */
    public function map(FieldDefinition $definition): void
    {

        $vardefs = $definition->getVardef();

        if (empty($vardefs)) {
            return;
        }

        $typesConfig = $this->getGroupTypesConfig();

        foreach ($vardefs as $fieldName => $fieldDefinition) {
            $type = $fieldDefinition['type'] ?? '';
            $groupedType = $typesConfig[$type] ?? [];

            if (isset($fieldDefinition['legacyGroup']) && $fieldDefinition['legacyGroup'] === true) {
                continue;
            }

            $groupedFields = $this->getGroupFields($fieldDefinition, $groupedType, $type);

            if (empty($groupedFields)) {
                continue;
            }

            $this->setLayout($groupedType, $fieldDefinition, $groupedFields, $type, $vardefs);
            $this->setDisplay($groupedType, $fieldDefinition);
            $this->setShowLabel($groupedType, $fieldDefinition);

            $fieldDefinition['groupFields'] = $this->getGroupedFieldDefinitions($groupedFields, $vardefs, $groupedType);


            $fieldDefinition['type'] = 'grouped-field';

            $vardefs[$fieldName] = $fieldDefinition;
        }

        $definition->setVardef($vardefs);
    }

    /**
     * @inheritDoc
     */
    public function getGroupTypesConfig(): array
    {
        return $this->groupedFieldsTypeMap ?? [];
    }

    /**
     * @inheritDoc
     */
    public function setLayout(
        array $groupedType,
        array &$fieldDefinition,
        array $groupedFields,
        string $type,
        array $vardefs
    ): void {
        $layout = $groupedType['layout'] ?? [];

        if (!empty($fieldDefinition['layout'])) {
            $layout = $fieldDefinition['layout'];
        }

        if (empty($layout)) {
            $layout = $groupedFields;
        }

        $groupedKey = $fieldDefinition['groupKey'] ?? '';
        if ($groupedKey) {
            $layout = $this->getGroupKeyFields($layout, $type, $groupedKey);
        }

        $trimmedLayout = [];
        foreach ($layout as $item) {
            if (!in_array($item, $groupedFields, true)) {
                continue;
            }

            $definition = $vardefs[$item] ?? [];

            if (empty($definition)) {
                continue;
            }

            $trimmedLayout[] = $item;
        }

        $fieldDefinition['layout'] = $trimmedLayout;
    }

    /**
     * @inheritDoc
     */
    public function setDisplay(array $groupedType, array &$fieldDefinition): void
    {
        $display = $groupedType['display'] ?? '';

        if (!empty($fieldDefinition['display'])) {
            $display = $fieldDefinition['display'];
        }

        if (empty($display)) {
            $display = 'vertical';
        }

        $fieldDefinition['display'] = $display;
    }

    /**
     * @inheritDoc
     */
    public function setShowLabel(array $groupedType, array &$fieldDefinition): void
    {
        if (empty($groupedType['showLabel']) || !empty($fieldDefinition['showLabel'])) {
            return;
        }

        $fieldDefinition['showLabel'] = $groupedType['showLabel'];
    }

    /**
     * @inheritDoc
     */
    public function getGroupFields(array &$fieldDefinition, array $groupedType, string $type): array
    {
        $groupedKey = $fieldDefinition['groupKey'] ?? '';
        $groupedFields = [];

        if (!empty($groupedType['groupFields']) && $groupedKey === '') {
            $groupedFields = $groupedType['groupFields'] ?? [];
        }

        if (!empty($groupedType['groupFields']) && $groupedKey !== '') {
            $groupedFields = $this->getGroupKeyFields($groupedType['groupFields'], $type, $groupedKey);
        }

        if (!empty($fieldDefinition['groupFields'])) {
            $groupedFields = $fieldDefinition['groupFields'];
        }

        return $groupedFields;
    }

    /**
     * @inheritDoc
     */
    public function getGroupKeyFields(array $groupedFields, string $type, string $groupedKey): array
    {
        $mapped = [];
        foreach ($groupedFields as $groupField) {
            $mapped[] = $groupedKey . '_' . $type . '_' . $groupField;
        }

        return $mapped;
    }

    /**
     * Get grouped field definitions
     *
     * @param array $groupedFields
     * @param array|null $vardefs
     * @param array $groupedType
     * @return array
     */
    public function getGroupedFieldDefinitions(array $groupedFields, ?array $vardefs, array $groupedType): array
    {
        $definitions = [];
        foreach ($groupedFields as $groupedField) {
            $definition = $vardefs[$groupedField] ?? [];

            if (empty($definition)) {
                continue;
            }

            $definition = $this->injectOverrides($groupedType, $groupedField, $definition);

            $definitions[$groupedField] = $definition;
        }

        return $definitions;
    }

    /**
     * Inject definition overrides
     *
     * @param array $groupedType
     * @param $groupedField
     * @param array $definition
     * @return array
     */
    protected function injectOverrides(array $groupedType, $groupedField, array $definition): array
    {
        $definitionOverrides = $groupedType['definition'][$groupedField] ?? [];
        if (empty($definitionOverrides)) {
            return $definition;
        }

        return array_merge($definition, $definitionOverrides);
    }
}
