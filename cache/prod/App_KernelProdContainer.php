<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerS8IQn4r\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerS8IQn4r/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerS8IQn4r.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerS8IQn4r\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerS8IQn4r\App_KernelProdContainer([
    'container.build_hash' => 'S8IQn4r',
    'container.build_id' => '002ff50b',
    'container.build_time' => 1636472778,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerS8IQn4r');
