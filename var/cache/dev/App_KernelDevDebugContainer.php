<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBsQLxzs\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBsQLxzs/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBsQLxzs.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBsQLxzs\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBsQLxzs\App_KernelDevDebugContainer([
    'container.build_hash' => 'BsQLxzs',
    'container.build_id' => '0b383861',
    'container.build_time' => 1646653111,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBsQLxzs');
