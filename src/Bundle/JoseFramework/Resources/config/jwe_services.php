<?php

declare(strict_types=1);

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2019 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

use Jose\Bundle\JoseFramework\Services;
use Jose\Component\Encryption;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return function (ContainerConfigurator $container) {
    $container = $container->services()->defaults()
        ->private()
        ->autoconfigure()
        ->autowire()
    ;

    $container->set(Services\JWEBuilderFactory::class)
        ->public()
    ;

    $container->set(Services\JWEDecrypterFactory::class)
        ->public()
    ;

    $container->set(Services\JWELoaderFactory::class)
        ->public()
    ;

    $container->set(Encryption\JWETokenSupport::class);
};
