<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/component' => [[['_route' => 'component_index', '_controller' => 'App\\Controller\\ComponentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/component/new' => [[['_route' => 'component_new', '_controller' => 'App\\Controller\\ComponentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/product' => [[['_route' => 'product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, true, false, null]],
        '/product/new' => [[['_route' => 'product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/component/(?'
                    .'|([^/]++)(?'
                        .'|(*:67)'
                        .'|/edit(*:79)'
                        .'|(*:86)'
                    .')'
                    .'|find/([^/]++)(*:107)'
                .')'
                .'|/product/(?'
                    .'|find/([^/]++)(*:141)'
                    .'|([^/]++)(?'
                        .'|(*:160)'
                        .'|/edit(*:173)'
                        .'|(*:181)'
                    .')'
                .')'
                .'|/logger/([^/]++)(*:207)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        67 => [[['_route' => 'component_show', '_controller' => 'App\\Controller\\ComponentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        79 => [[['_route' => 'component_edit', '_controller' => 'App\\Controller\\ComponentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        86 => [[['_route' => 'component_delete', '_controller' => 'App\\Controller\\ComponentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        107 => [[['_route' => 'find_component_by_name', '_controller' => 'App\\Controller\\ComponentController::findAllByName'], ['name'], null, null, false, true, null]],
        141 => [[['_route' => 'find_product_by_name', '_controller' => 'App\\Controller\\ProductController::findAllByName'], ['name'], null, null, false, true, null]],
        160 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        173 => [[['_route' => 'product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        181 => [[['_route' => 'product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        207 => [
            [['_route' => 'api_logger_log', '_controller' => 'App\\Controller\\LogController::logger'], ['name'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
