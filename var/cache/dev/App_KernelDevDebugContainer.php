<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerG2T17zB\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerG2T17zB/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerG2T17zB.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerG2T17zB\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerG2T17zB\App_KernelDevDebugContainer([
    'container.build_hash' => 'G2T17zB',
    'container.build_id' => 'ec830df8',
    'container.build_time' => 1649146278,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerG2T17zB');
