<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXDu69wO\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXDu69wO/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXDu69wO.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXDu69wO\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXDu69wO\App_KernelDevDebugContainer([
    'container.build_hash' => 'XDu69wO',
    'container.build_id' => 'bec12509',
    'container.build_time' => 1649340457,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXDu69wO');
