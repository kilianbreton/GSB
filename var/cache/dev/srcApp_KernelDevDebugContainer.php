<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0fzdItx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0fzdItx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container0fzdItx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container0fzdItx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container0fzdItx\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '0fzdItx',
    'container.build_id' => '077235af',
    'container.build_time' => 1556885749,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0fzdItx');
