<?php

use Rector\Config\RectorConfig;
use Rector\Php74\Rector\FunctionLike\ImplicitNullableParamTypeRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/lib', // je nach Paketstruktur - anpassen/entfernen
    ])
    ->withRules([
        ImplicitNullableParamTypeRector::class,
    ]);