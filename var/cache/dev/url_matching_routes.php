<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/caracteristicas' => [[['_route' => 'app_caracteristicas_index', '_controller' => 'App\\Controller\\CaracteristicasController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/caracteristicas/new' => [[['_route' => 'app_caracteristicas_new', '_controller' => 'App\\Controller\\CaracteristicasController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produtos' => [[['_route' => 'app_produtos_index', '_controller' => 'App\\Controller\\ProdutosController::index'], null, ['GET' => 0], null, true, false, null]],
        '/produtos/new' => [[['_route' => 'app_produtos_new', '_controller' => 'App\\Controller\\ProdutosController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/teste' => [[['_route' => 'teste', '_controller' => 'App\\Controller\\TesteController::index'], null, null, null, false, false, null]],
        '/hello' => [[['_route' => 'hello', '_controller' => 'App\\Controller\\HelloController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/caracteristicas/([^/]++)(?'
                    .'|(*:203)'
                    .'|/edit(*:216)'
                    .'|(*:224)'
                .')'
                .'|/produtos/([^/]++)(?'
                    .'|(*:254)'
                    .'|/edit(*:267)'
                    .'|(*:275)'
                .')'
                .'|/teste/detalhes/([^/]++)(*:308)'
                .'|/helloname/([^/]++)(*:335)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        203 => [[['_route' => 'app_caracteristicas_show', '_controller' => 'App\\Controller\\CaracteristicasController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        216 => [[['_route' => 'app_caracteristicas_edit', '_controller' => 'App\\Controller\\CaracteristicasController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        224 => [[['_route' => 'app_caracteristicas_delete', '_controller' => 'App\\Controller\\CaracteristicasController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        254 => [[['_route' => 'app_produtos_show', '_controller' => 'App\\Controller\\ProdutosController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        267 => [[['_route' => 'app_produtos_edit', '_controller' => 'App\\Controller\\ProdutosController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        275 => [[['_route' => 'app_produtos_delete', '_controller' => 'App\\Controller\\ProdutosController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        308 => [[['_route' => 'detalhes', '_controller' => 'App\\Controller\\TesteController::detalhes'], ['id'], null, null, false, true, null]],
        335 => [
            [['_route' => 'helloname', '_controller' => 'App\\Controller\\HelloController::helloname'], ['name'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
