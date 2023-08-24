<?php

declare(strict_types=1);

namespace Application;

use Laminas\Router\Http\Literal;
use Laminas\Router\Http\Segment;
use Laminas\ServiceManager\Factory\InvokableFactory;

return [
  'router' => [
    'routes' => [
      'home' => [
        'type'    => Literal::class,
        'options' => [
          'route'    => '/',
          'defaults' => [
            'controller' => Controller\IndexController::class,
            'action'     => 'displayForm1',
          ],
        ],
      ],
      'submit-form1' => [
        'type' => Segment::class,
        'options' => [
          'route' => '/submit-form1',
          'defaults' => [
            'controller' => Controller\IndexController::class,
            'action' => 'submitForm1',
          ],
        ],
      ],      
      'display-form2' => [
        'type' => Segment::class,
        'options' => [
          'route' => '/display-form2',
          'defaults' => [
            'controller' => Controller\IndexController::class,
            'action' => 'displayForm2',
          ],
        ],
      ],
      'submit-form2' => [
        'type' => Segment::class,
        'options' => [
          'route' => '/submit-form2',
          'defaults' => [
            'controller' => Controller\IndexController::class,
            'action' => 'submitForm2',
          ],
        ],
      ],
      'display-form3' => [
        'type' => Segment::class,
        'options' => [
          'route' => '/display-form3',
          'defaults' => [
            'controller' => Controller\IndexController::class,
            'action' => 'displayForm3',
          ],
        ],
      ],
      'submit-form3' => [
        'type' => Segment::class,
        'options' => [
          'route' => '/submit-form3',
          'defaults' => [
            'controller' => Controller\IndexController::class,
            'action' => 'submitForm3',
          ],
        ],
      ],
      'display-form4' => [
        'type' => Segment::class,
        'options' => [
          'route' => '/display-form4',
          'defaults' => [
            'controller' => Controller\IndexController::class,
            'action' => 'displayForm4',
          ],
        ],
      ],
      'submit-form4' => [
        'type' => Segment::class,
        'options' => [
          'route' => '/submit-form4',
          'defaults' => [
            'controller' => Controller\IndexController::class,
            'action' => 'submitForm4',
          ],
        ],
      ],
      'display-form5' => [
        'type' => Segment::class,
        'options' => [
          'route' => '/display-form5',
          'defaults' => [
            'controller' => Controller\IndexController::class,
            'action' => 'displayForm5',
          ],
        ],
      ],
      'submit-form5' => [
        'type' => Segment::class,
        'options' => [
          'route' => '/submit-form5',
          'defaults' => [
            'controller' => Controller\IndexController::class,
            'action' => 'submitForm5',
          ],
        ],
      ],
    ],
  ],
  'controllers' => [
    'factories' => [
      Controller\IndexController::class => InvokableFactory::class,
    ],
  ],
  'view_manager' => [
    'display_not_found_reason' => true,
    'display_exceptions'       => true,
    'doctype'                  => 'HTML5',
    'not_found_template'       => 'error/404',
    'exception_template'       => 'error/index',
    'template_map' => [
      'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
      'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
      'error/404'               => __DIR__ . '/../view/error/404.phtml',
      'error/index'             => __DIR__ . '/../view/error/index.phtml',
    ],
    'template_path_stack' => [
      __DIR__ . '/../view',
    ],
  ],
];
