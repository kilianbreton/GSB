<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHhK7Uxc\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHhK7Uxc/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHhK7Uxc.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHhK7Uxc\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerHhK7Uxc\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'HhK7Uxc',
    'container.build_id' => '0a8ffe4a',
    'container.build_time' => 1552994481,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHhK7Uxc');
