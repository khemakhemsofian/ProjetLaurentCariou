<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXE1HgPP\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXE1HgPP/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXE1HgPP.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXE1HgPP\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXE1HgPP\App_KernelDevDebugContainer([
    'container.build_hash' => 'XE1HgPP',
    'container.build_id' => 'f284b57a',
    'container.build_time' => 1653662645,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXE1HgPP');
