<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRVk5O1x\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRVk5O1x/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRVk5O1x.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRVk5O1x\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRVk5O1x\App_KernelDevDebugContainer([
    'container.build_hash' => 'RVk5O1x',
    'container.build_id' => '6ee7778d',
    'container.build_time' => 1648647387,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRVk5O1x');
