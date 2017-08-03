<?php
/**
 * @author Pavel Tsydzik <xagero@gmail.com>
 * @date 03.08.2017 16:10
 */

use Zend\ConfigAggregator\ConfigAggregator;

return [
    ConfigAggregator::ENABLE_CACHE => true,
    'debug' => false,
    'zend-expressive' => [
        'programmatic_pipeline' => true,
    ]
];
