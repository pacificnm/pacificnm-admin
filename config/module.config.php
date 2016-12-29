<?php
return array(
    'module' => array(
        'Admin' => array(
            'name' => 'Admin',
            'version' => '1.0.4'
        )
        
    ),
    'controllers' => array(
        'factories' => array(
            'Admin\Controller\Index' => 'Admin\Controller\Factory\IndexControllerFactory'
        )
    ),
    'service_manager' => array(
        'factories' => array(
            'adminMenu' => 'Admin\Service\Factory\MenuServiceFactory'
        )
    ),
    'router' => array(
        'routes' => array(
            'admin-index' => array(
                'type' => 'literal',
                'title' => 'Admin',
                'pageTitle' => 'Admin',
                'pageSubTitle' => 'Home',
                'activeMenuItem' => 'admin-index',
                'icon' => 'fa fa-home',
                'layout' => 'admin',
                'activeSubMenuItem' => 'admin-index',
                'options' => array(
                    'route' => '/admin',
                    'defaults' => array(
                        'controller' => 'Admin\Controller\Index',
                        'action' => 'index'
                    )
                )
            )
        )
    ),
    'view_helpers' => array(
        'factories' => array(
            'AdminAsideMenu' => 'Admin\View\Helper\Factory\AdminAsideMenuFactory'
        )
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view'
        )
    ),
    'acl' => array(
        'default' => array(
            'guest' => array(),
            'user' => array(),
            'administrator' => array(
                'admin-index'
            )
        )
    ),
    'navigation' => array(
        'default' => array(
            array(
                'label' => 'Admin',
                'route' => 'admin-index',
                'useRouteMatch' => true
            )
        )
    ),
    'menu' => array(
        'default' => array(
            array(
                'name' => 'Admin',
                'route' => 'admin-index',
                'icon' => 'fa fa-gear',
                'order' => 99,
                'location' => 'left',
                'active' => true,
                'items' => array(
                    array(
                        'name' => 'Home',
                        'route' => 'admin-index',
                        'icon' => 'fa fa-home',
                        'order' => 1,
                        'active' => true,
                    )
                )
            )
        )
    ),
    
);