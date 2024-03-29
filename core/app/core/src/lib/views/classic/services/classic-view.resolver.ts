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

import {Injectable} from '@angular/core';
import {ActivatedRouteSnapshot} from '@angular/router';
import {map, tap} from 'rxjs/operators';
import {ModuleNameMapper} from '../../../services/navigation/module-name-mapper/module-name-mapper.service';
import {AppStateStore} from '../../../store/app-state/app-state.store';
import {SystemConfigStore} from '../../../store/system-config/system-config.store';
import {NavigationStore} from '../../../store/navigation/navigation.store';
import {UserPreferenceStore} from '../../../store/user-preference/user-preference.store';
import {BaseMetadataResolver} from '../../../services/metadata/base-metadata.resolver';
import {RouteConverter} from '../../../services/navigation/route-converter/route-converter.service';
import {LanguageStore} from '../../../store/language/language.store';
import {ThemeImagesStore} from '../../../store/theme-images/theme-images.store';
import {MessageService} from '../../../services/message/message.service';

@Injectable({providedIn: 'root'})
export class ClassicViewResolver extends BaseMetadataResolver {

    constructor(
        protected systemConfigStore: SystemConfigStore,
        protected languageStore: LanguageStore,
        protected navigationStore: NavigationStore,
        protected userPreferenceStore: UserPreferenceStore,
        protected themeImagesStore: ThemeImagesStore,
        protected moduleNameMapper: ModuleNameMapper,
        protected routeConverter: RouteConverter,
        protected messageService: MessageService,
        protected appStateStore: AppStateStore,
    ) {
        super(
            systemConfigStore,
            languageStore,
            navigationStore,
            userPreferenceStore,
            themeImagesStore,
            appStateStore,
            moduleNameMapper,
            messageService
        );
    }

    resolve(route: ActivatedRouteSnapshot): any {

        return super.resolve(route).pipe(
            map(() => this.routeConverter.toLegacy(route.params, route.queryParams)),
            tap(
                () => {
                    if (route.params.module) {
                        const module = this.calculateActiveModule(route);

                        this.appStateStore.setModule(module);
                    }
                    if (route.params.action) {
                        this.appStateStore.setView(route.params.action);
                    }
                },
                () => {
                    this.addMetadataLoadErrorMessage();
                }),
        );
    }
}
