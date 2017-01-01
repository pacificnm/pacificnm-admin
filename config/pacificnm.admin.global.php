<?php
/**
 * Pacific NM (https://www.pacificnm.com)
 *
 * @link https://github.com/pacificnm/pacificnm-admin for the canonical source repository
 * @copyright Copyright (c) 20011-2016 Pacific NM USA Inc. (https://www.pacificnm.com)
 * @license https://github.com/pacificnm/pacificnm-admin/blob/master/LICENSE.md
 */
return array(
    'module' => array(
        'Admin' => array(
            'name' => 'Admin',
            'version' => '1.0.5'
        )
    )
    ,
    'controllers' => array(
        'factories' => array(
            'Pacificnm\Admin\Controller\Index' => 'Pacificnm\Admin\Controller\Factory\IndexControllerFactory'
        )
    ),
    'service_manager' => array(
        'factories' => array(
            'adminMenu' => 'Pacificnm\Admin\Service\Factory\MenuServiceFactory'
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
                        'controller' => 'Pacificnm\Admin\Controller\Index',
                        'action' => 'index'
                    )
                )
            )
        )
    ),
    'view_helpers' => array(
        'factories' => array()
    ),
    'view_manager' => array(
        'controller_map' => array(
            'Pacificnm\Admin' => true
        ),
        'template_map' => array(
            'pacificnm/admin/index/index' => __DIR__ . '/../view/admin/index/index.phtml'
        ),
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
                        'active' => true
                    )
                )
            )
        )
    )
)
;