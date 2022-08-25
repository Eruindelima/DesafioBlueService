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
        '/admin/categorias' => [[['_route' => 'app_categorias_index', '_controller' => 'App\\Controller\\CategoriaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/categorias/new' => [[['_route' => 'app_categorias_new', '_controller' => 'App\\Controller\\CategoriaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/produtos' => [[['_route' => 'app_produtos_index', '_controller' => 'App\\Controller\\ProdutosController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/produtos/new' => [[['_route' => 'app_produtos_new', '_controller' => 'App\\Controller\\ProdutosController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/loja' => [[['_route' => 'app_store', '_controller' => 'App\\Controller\\StoreController::index'], null, null, null, true, false, null]],
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
                .'|/admin/(?'
                    .'|ca(?'
                        .'|racteristicas/([^/]++)(?'
                            .'|(*:209)'
                            .'|/edit(*:222)'
                            .'|(*:230)'
                        .')'
                        .'|tegorias/([^/]++)(?'
                            .'|(*:259)'
                            .'|/edit(*:272)'
                            .'|(*:280)'
                        .')'
                    .')'
                    .'|produtos/([^/]++)(?'
                        .'|(*:310)'
                        .'|/edit(*:323)'
                        .'|(*:331)'
                    .')'
                .')'
                .'|/loja/(?'
                    .'|produto/([^/]++)(*:366)'
                    .'|categoria/([^/]++)(*:392)'
                .')'
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
        209 => [[['_route' => 'app_caracteristicas_show', '_controller' => 'App\\Controller\\CaracteristicasController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        222 => [[['_route' => 'app_caracteristicas_edit', '_controller' => 'App\\Controller\\CaracteristicasController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        230 => [[['_route' => 'app_caracteristicas_delete', '_controller' => 'App\\Controller\\CaracteristicasController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        259 => [[['_route' => 'app_categorias_show', '_controller' => 'App\\Controller\\CategoriaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        272 => [[['_route' => 'app_categorias_edit', '_controller' => 'App\\Controller\\CategoriaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        280 => [[['_route' => 'app_categorias_delete', '_controller' => 'App\\Controller\\CategoriaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        310 => [[['_route' => 'app_produtos_show', '_controller' => 'App\\Controller\\ProdutosController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        323 => [[['_route' => 'app_produtos_edit', '_controller' => 'App\\Controller\\ProdutosController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        331 => [[['_route' => 'app_produtos_delete', '_controller' => 'App\\Controller\\ProdutosController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        366 => [[['_route' => 'app_store_view', '_controller' => 'App\\Controller\\StoreController::show'], ['slug'], null, null, false, true, null]],
        392 => [
            [['_route' => 'app_store_categoria_view', '_controller' => 'App\\Controller\\StoreController::showCategoria'], ['categoria'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
