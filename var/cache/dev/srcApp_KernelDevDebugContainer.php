<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0muS9vy\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0muS9vy/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container0muS9vy.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container0muS9vy\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container0muS9vy\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '0muS9vy',
    'container.build_id' => '4e325a48',
    'container.build_time' => 1551790034,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0muS9vy');
