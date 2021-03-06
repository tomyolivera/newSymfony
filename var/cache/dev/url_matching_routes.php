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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::dashboard'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\AdminController::findUsers'], null, null, null, true, false, null]],
        '/chat' => [[['_route' => 'chat', '_controller' => 'App\\Controller\\ChatController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/task' => [[['_route' => 'task_index', '_controller' => 'App\\Controller\\TaskController::index'], null, null, null, false, false, null]],
        '/task/new' => [[['_route' => 'task_new', '_controller' => 'App\\Controller\\TaskController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/task/deleteAll' => [[['_route' => 'task_delete_all', '_controller' => 'App\\Controller\\TaskController::deleteAll'], null, ['DELETE' => 0], null, false, false, null]],
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
                .'|/admin/users/(?'
                    .'|edit/([^/]++)(*:198)'
                    .'|delete/([^/]++)(*:221)'
                    .'|ban/([^/]++)(*:241)'
                .')'
                .'|/lucky/number/([^/]++)(*:272)'
                .'|/profile/d(?'
                    .'|isable/([^/]++)(*:308)'
                    .'|elete/([^/]++)(*:330)'
                .')'
                .'|/task/([^/]++)/(?'
                    .'|edit(*:361)'
                    .'|delete(*:375)'
                .')'
                .'|/js/routing(?:\\.(js|json))?(*:411)'
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
        198 => [[['_route' => 'admin_users_edit', '_controller' => 'App\\Controller\\AdminController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        221 => [[['_route' => 'admin_users_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        241 => [[['_route' => 'admin_users_ban', '_controller' => 'App\\Controller\\AdminController::changeBan'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        272 => [[['_route' => 'app_lucky_number', '_controller' => 'App\\Controller\\LuckyController::number'], ['max'], null, null, false, true, null]],
        308 => [[['_route' => 'profile_disable', '_controller' => 'App\\Controller\\ProfileController::disableUser'], ['id'], ['PUT' => 0], null, false, true, null]],
        330 => [[['_route' => 'profile_delete', '_controller' => 'App\\Controller\\ProfileController::deleteUser'], ['id'], ['DELETE' => 0], null, false, true, null]],
        361 => [[['_route' => 'task_edit', '_controller' => 'App\\Controller\\TaskController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        375 => [[['_route' => 'task_delete', '_controller' => 'App\\Controller\\TaskController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        411 => [
            [['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
