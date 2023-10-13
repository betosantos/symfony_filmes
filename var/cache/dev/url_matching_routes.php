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
        '/admin/categorias' => [[['_route' => 'admin_categorias_index', '_controller' => 'App\\Controller\\CategoriasController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/categorias/new' => [[['_route' => 'app_categorias_new', '_controller' => 'App\\Controller\\CategoriasController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/filmes' => [[['_route' => 'admin_filmes', '_controller' => 'App\\Controller\\FilmesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/filmes/new' => [[['_route' => 'admin_filmes_new', '_controller' => 'App\\Controller\\FilmesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/email' => [[['_route' => 'app_mail_sendemail', '_controller' => 'App\\Controller\\MailController::sendEmail'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/usuarios' => [[['_route' => 'admin_users_index', '_controller' => 'App\\Controller\\UsersController::index'], null, null, null, true, false, null]],
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
                    .'|categorias/(?'
                        .'|([^/]++)(?'
                            .'|(*:204)'
                            .'|/edit(*:217)'
                        .')'
                        .'|delete/([^/]++)(*:241)'
                        .'|confirm\\-delete/([^/]++)(*:273)'
                    .')'
                    .'|filmes/(?'
                        .'|([^/]++)(?'
                            .'|(*:303)'
                            .'|/edit(*:316)'
                        .')'
                        .'|delete/([^/]++)(*:340)'
                        .'|confirm\\-delete/([^/]++)(*:372)'
                    .')'
                    .'|usuarios/([^/]++)(*:398)'
                .')'
                .'|/photos/([^/]++)(*:423)'
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
        204 => [[['_route' => 'app_categorias_show', '_controller' => 'App\\Controller\\CategoriasController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        217 => [[['_route' => 'app_categorias_edit', '_controller' => 'App\\Controller\\CategoriasController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        241 => [[['_route' => 'app_categorias_delete', '_controller' => 'App\\Controller\\CategoriasController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        273 => [[['_route' => 'confirm_categorias_delete', '_controller' => 'App\\Controller\\CategoriasController::deleteConfirmation'], ['id'], ['GET' => 0], null, false, true, null]],
        303 => [[['_route' => 'app_filmes_show', '_controller' => 'App\\Controller\\FilmesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        316 => [[['_route' => 'app_filmes_edit', '_controller' => 'App\\Controller\\FilmesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        340 => [[['_route' => 'app_filmes_delete', '_controller' => 'App\\Controller\\FilmesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        372 => [[['_route' => 'confirm_filmes_delete', '_controller' => 'App\\Controller\\FilmesController::deleteConfirmation'], ['id'], ['GET' => 0], null, false, true, null]],
        398 => [[['_route' => 'admin_users_edit', '_controller' => 'App\\Controller\\UsersController::edit'], ['id'], null, null, false, true, null]],
        423 => [
            [['_route' => 'photos', '_controller' => 'App\\Controller\\PhotosController::index'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
