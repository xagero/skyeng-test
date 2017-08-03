<?php
/**
 * @author Pavel Tsydzik <xagero@gmail.com>
 * @date 03.08.2017 16:01
 */

use Zend\ConfigAggregator\ArrayProvider;
use Zend\ConfigAggregator\ConfigAggregator;
use Zend\ConfigAggregator\PhpFileProvider;
use Zend\Router;
use Zend\Validator;

// To enable or disable caching, set the `ConfigAggregator::ENABLE_CACHE` boolean in `config/autoload/local.php`.
$cacheConfig = [
    'config_cache_path' => 'data/config-cache.php',
];

$aggregator = new ConfigAggregator([

    Router\ConfigProvider::class,
    Validator\ConfigProvider::class,

    // Include cache configuration
    new ArrayProvider($cacheConfig),

    // Module config
    App\ConfigProvider::class,
    Exercises\ConfigProvider::class,

    // Load application config in a pre-defined order in such a way that local settings overwrite global settings.
    // Loaded as first to last:
    //   - `global.php`
    //   - `*.global.php`
    //   - `local.php`
    //   - `*.local.php`
    new PhpFileProvider('config/autoload/{{,*.}global,{,*.}local}.php'),

    // Load development config if it exists
    new PhpFileProvider('config/development.config.php'),
], $cacheConfig['config_cache_path']);

return $aggregator->getMergedConfig();