<?php
/**
 * @author Pavel Tsydzik <xagero@gmail.com>
 * @date 03.08.2017 16:11
 */

use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Router\ZendRouter;

return [
    'dependencies' => [
        'invokables' => [
            RouterInterface::class => ZendRouter::class,
        ],
    ],
];
