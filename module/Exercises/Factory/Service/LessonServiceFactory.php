<?php
/**
 * @author Pavel Tsydzik <xagero@gmail.com>
 * @date 03.08.2017 19:06
 */

namespace Exercises\Factory\Service;

use Exercises\Repository\ExercisesRepository;
use Exercises\Service\LessonService;
use Exercises\Service\ValidatorService;
use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class LessonServiceFactory
 * @package Exercises\Factory\Service
 */
class LessonServiceFactory implements FactoryInterface
{

    /**
     * Create an object
     *
     * @param  ContainerInterface $container
     * @param  string $requestedName
     * @param  null|array $options
     * @return LessonService
     * @throws ServiceNotFoundException if unable to resolve the service.
     * @throws ServiceNotCreatedException if an exception is raised when creating a service.
     * @throws ContainerException if any other error occurs
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $service = new LessonService();
        $service->setRepository($container->get(ExercisesRepository::class));
        $service->setValidator($container->get(ValidatorService::class));

        return $service;
    }
}
