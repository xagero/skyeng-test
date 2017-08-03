<?php
/**
 * @author Pavel Tsydzik <xagero@gmail.com>
 * @date 03.08.2017 16:37
 */

namespace Exercises;

use Exercises\Action\AnswerAction;
use Exercises\Factory\Action\AnswerActionFactory;
use Exercises\Factory\Repository\Adapter\StorageFactory;
use Exercises\Factory\Repository\ExercisesRepositoryFactory;
use Exercises\Factory\Service\LessonServiceFactory;
use Exercises\Repository\Adapter\FileStorageAdapter;
use Exercises\Repository\Adapter\MongoStorageAdapter;
use Exercises\Repository\Adapter\MysqlStorageAdapter;
use Exercises\Repository\Adapter\RedisStorageAdapter;
use Exercises\Repository\Adapter\StorageInterface;
use Exercises\Repository\ExercisesRepository;
use Exercises\Service\LessonService;
use Exercises\Service\ValidatorService;
use Zend\ServiceManager\Factory\InvokableFactory;

/**
 * Class ConfigProvider
 * @package Exercises
 */
class ConfigProvider
{
    /**
     *
     */
    public function __invoke()
    {
        return [
            'dependencies' => $this->getDependencies(),
        ];
    }

    /**
     * Returns the container dependencies
     *
     * @return array
     */
    protected function getDependencies()
    {
        return [
            'aliases' => [
                //StorageInterface::class => FileStorageAdapter::class,
                //StorageInterface::class => MongoStorageAdapter::class,
                StorageInterface::class => RedisStorageAdapter::class,

            ],
            'factories' => [

                /** Middleware action */
                AnswerAction::class => AnswerActionFactory::class,

                /** Services */
                LessonService::class => LessonServiceFactory::class,
                'storageAdapter' => StorageFactory::class,
                ValidatorService::class => InvokableFactory::class,

                /** Repository */
                ExercisesRepository::class => ExercisesRepositoryFactory::class,

                /** Storage adapter */
                FileStorageAdapter::class => InvokableFactory::class,
                MongoStorageAdapter::class => InvokableFactory::class,
                MysqlStorageAdapter::class => InvokableFactory::class,
                RedisStorageAdapter::class => InvokableFactory::class

            ]
        ];
    }
}
