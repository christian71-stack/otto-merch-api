<?php

use Rector\Config\RectorConfig;
use Rector\Php74\Rector\FunctionLike\ImplicitNullableParamTypeRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/lib',
    ])
    ->withRules([
        ImplicitNullableParamTypeRector::class,
    ]);