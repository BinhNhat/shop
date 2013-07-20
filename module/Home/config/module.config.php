<?php
/**
 * Created by JetBrains PhpStorm.
 * User: BinhNhat
 * Date: 7/20/13
 * Time: 12:05 PM
 * To change this template use File | Settings | File Templates.
 */
return array(
    'controllers'=> array(
        'invokables'=> array(
            'Home\Controller\Product'=> 'Home\Controller\ProductController',
        ),
    ),
    'router'=> array(
        'routes'=> array(
            //cai dat route cho controller
            //home
            'product' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/home',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Home\Controller',
                        'controller'    => 'Product',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'view_manager'=> array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
//        'not_found_template'       => 'error/404',
//        'exception_template'       => 'error/index',
        'template_map' => array(
//            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'home/product/index' => __DIR__ . '/../view/home/product/index.phtml',
//            'error/404'               => __DIR__ . '/../view/error/404.phtml',
//            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
           'home'=> __DIR__ . '/../view',
        ),
    ),
);