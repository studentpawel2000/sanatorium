<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container0MjMoxd\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container0MjMoxd/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container0MjMoxd.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container0MjMoxd\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container0MjMoxd\App_KernelDevDebugContainer([
    'container.build_hash' => '0MjMoxd',
    'container.build_id' => '6ec4f3fc',
    'container.build_time' => 1674857486,
], __DIR__.\DIRECTORY_SEPARATOR.'Container0MjMoxd');
