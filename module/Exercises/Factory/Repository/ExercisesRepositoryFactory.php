<?php
/**
 * @author Pavel Tsydzik <xagero@gmail.com>
 * @date 03.08.2017 19:00
 */

namespace Exercises\Factory\Repository;

use Exercises\Repository\Adapter\StorageInterface;
use Exercises\Repository\ExercisesRepository;
use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class ExercisesRepositoryFactory
 * @package Exercises\Factory\Repository
 */
class ExercisesRepositoryFactory implements FactoryInterface
{

    /**
     * Create an object
     *
     * @param  ContainerInterface $container
     * @param  string $requestedName
     * @param  null|array $options
     * @return ExercisesRepository
     * @throws ServiceNotFoundException if unable to resolve the service.
     * @throws ServiceNotCreatedException if an exception is raised when creating a service.
     * @throws ContainerException if any other error occurs
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $repository = new ExercisesRepository();
        $repository->setStorageAdapter($container->get('storageAdapter'));

        return $repository;
    }
}
