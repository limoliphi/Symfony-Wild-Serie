<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBz4h3G4\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBz4h3G4/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBz4h3G4.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBz4h3G4\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerBz4h3G4\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Bz4h3G4',
    'container.build_id' => '45f6264c',
    'container.build_time' => 1574440181,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBz4h3G4');
