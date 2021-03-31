<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'ADmad/JwtAuth' => $baseDir . '/vendor/admad/cakephp-jwt-auth/',
        'Bake' => $baseDir . '/vendor/cakephp/bake/',
        'BryanCrowe' => $baseDir . '/plugins/BryanCrowe/',
        'BryanCrowe/ApiPagination' => $baseDir . '/vendor/bcrowe/cakephp-api-pagination/',
        'CakeDC' => $baseDir . '/plugins/CakeDC/',
        'Crud' => $baseDir . '/vendor/friendsofcake/crud/',
        'CrudJsonApi' => $baseDir . '/vendor/friendsofcake/crud-json-api/',
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/',
        'RestApi' => $baseDir . '/plugins/RestApi/',
        'Search' => $baseDir . '/plugins/Search/',
        'WyriHaximus/TwigView' => $baseDir . '/vendor/wyrihaximus/twig-view/',
        'cakephp-api-pagination-master' => $baseDir . '/plugins/cakephp-api-pagination-master/'
    ]
];