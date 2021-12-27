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
        '/admin/area/list' => [[['_route' => 'areas_list', '_controller' => 'App\\Controller\\AreaController::listAction'], null, null, null, false, false, null]],
        '/admin/area/new' => [[['_route' => 'area_new', '_controller' => 'App\\Controller\\AreaController::newAction'], null, null, null, false, false, null]],
        '/admin/empleados/list' => [[['_route' => 'empleados_list', '_controller' => 'App\\Controller\\EmpleadoController::listAction'], null, null, null, false, false, null]],
        '/admin/empleado/new' => [[['_route' => 'empleado_new', '_controller' => 'App\\Controller\\EmpleadoController::newAction'], null, null, null, false, false, null]],
        '/admin/empleado/hour' => [[['_route' => 'empleado_hour', '_controller' => 'App\\Controller\\EmpleadoController::hourAction'], null, null, null, false, false, null]],
        '/admin/group/list' => [[['_route' => 'group_list', '_controller' => 'App\\Controller\\GroupController::listAction'], null, null, null, false, false, null]],
        '/admin/group' => [[['_route' => 'app_group_list', '_controller' => 'App\\Controller\\GroupController::listAction'], null, null, null, true, false, null]],
        '/admin/group/new' => [[['_route' => 'group_new', '_controller' => 'App\\Controller\\GroupController::newAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::loginAction'], null, null, null, false, false, null]],
        '/admin/user/list' => [[['_route' => 'user_list', '_controller' => 'App\\Controller\\UserController::listAction'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_user_list', '_controller' => 'App\\Controller\\UserController::listAction'], null, null, null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::newAction'], null, null, null, false, false, null]],
        '/change-password' => [[['_route' => 'user_change_password', '_controller' => 'App\\Controller\\UserController::changePasswordAction'], null, null, null, false, false, null]],
        '/recover-password' => [[['_route' => 'user_recover_password', '_controller' => 'App\\Controller\\UserController::recoverPasswordAction'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\DashboardController::indexAction'], null, null, null, false, false, null]],
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
                    .'|area/([^/]++)/(?'
                        .'|edit(*:200)'
                        .'|view(*:212)'
                        .'|delete(*:226)'
                    .')'
                    .'|empleado/([^/]++)/(?'
                        .'|view(*:260)'
                        .'|edit(*:272)'
                        .'|delete(*:286)'
                    .')'
                    .'|group/([^/]++)/(?'
                        .'|edit(*:317)'
                        .'|view(*:329)'
                        .'|delete(*:343)'
                    .')'
                    .'|propiedad/([^/]++)/(?'
                        .'|list(*:378)'
                        .'|view(*:390)'
                        .'|new(*:401)'
                        .'|edit(*:413)'
                        .'|delete(*:427)'
                    .')'
                    .'|user/([^/]++)/(?'
                        .'|view(*:457)'
                        .'|e(?'
                            .'|dit(*:472)'
                            .'|nable\\-disable/([^/]++)(*:503)'
                        .')'
                    .')'
                .')'
                .'|/re(?'
                    .'|gistration/([^/]++)(*:539)'
                    .'|set\\-password/([^/]++)(*:569)'
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
        200 => [[['_route' => 'area_edit', '_controller' => 'App\\Controller\\AreaController::editAction'], ['id'], null, null, false, false, null]],
        212 => [[['_route' => 'area_view', '_controller' => 'App\\Controller\\AreaController::viewAction'], ['id'], null, null, false, false, null]],
        226 => [[['_route' => 'area_delete', '_controller' => 'App\\Controller\\AreaController::deleteAction'], ['id'], null, null, false, false, null]],
        260 => [[['_route' => 'empleado_view', '_controller' => 'App\\Controller\\EmpleadoController::viewAction'], ['id'], null, null, false, false, null]],
        272 => [[['_route' => 'empleado_edit', '_controller' => 'App\\Controller\\EmpleadoController::editAction'], ['id'], null, null, false, false, null]],
        286 => [[['_route' => 'empleado_delete', '_controller' => 'App\\Controller\\EmpleadoController::deleteAction'], ['id'], null, null, false, false, null]],
        317 => [[['_route' => 'group_edit', '_controller' => 'App\\Controller\\GroupController::editAction'], ['id'], null, null, false, false, null]],
        329 => [[['_route' => 'group_view', '_controller' => 'App\\Controller\\GroupController::viewAction'], ['id'], null, null, false, false, null]],
        343 => [[['_route' => 'group_delete', '_controller' => 'App\\Controller\\GroupController::deleteAction'], ['id'], null, null, false, false, null]],
        378 => [[['_route' => 'propiedad_list', '_controller' => 'App\\Controller\\PropiedadController::listAction'], ['id'], null, null, true, false, null]],
        390 => [[['_route' => 'propiedad_view', '_controller' => 'App\\Controller\\PropiedadController::viewAction'], ['id'], null, null, false, false, null]],
        401 => [[['_route' => 'propiedad_new', '_controller' => 'App\\Controller\\PropiedadController::newAction'], ['id'], null, null, false, false, null]],
        413 => [[['_route' => 'propiedad_edit', '_controller' => 'App\\Controller\\PropiedadController::editAction'], ['id'], null, null, false, false, null]],
        427 => [[['_route' => 'propiedad_delete', '_controller' => 'App\\Controller\\PropiedadController::deleteAction'], ['id'], null, null, false, false, null]],
        457 => [[['_route' => 'user_view', '_controller' => 'App\\Controller\\UserController::viewAction'], ['id'], null, null, false, false, null]],
        472 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::editAction'], ['id'], null, null, false, false, null]],
        503 => [[['_route' => 'user_enable_disable', '_controller' => 'App\\Controller\\UserController::enableDisableAction'], ['id', 'value'], null, null, false, true, null]],
        539 => [[['_route' => 'user_registration', '_controller' => 'App\\Controller\\UserController::registrationAction'], ['hash'], null, null, false, true, null]],
        569 => [
            [['_route' => 'user_reset_password', '_controller' => 'App\\Controller\\UserController::resetPasswordAction'], ['hash'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
