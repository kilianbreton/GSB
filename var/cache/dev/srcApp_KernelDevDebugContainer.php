<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUFgsDgL\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUFgsDgL/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUFgsDgL.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUFgsDgL\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerUFgsDgL\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'UFgsDgL',
    'container.build_id' => '5839095e',
    'container.build_time' => 1556800020,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUFgsDgL');
