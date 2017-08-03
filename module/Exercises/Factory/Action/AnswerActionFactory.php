<?php
/**
 * @author Pavel Tsydzik <xagero@gmail.com>
 * @date 03.08.2017 19:10
 */

namespace Exercises\Factory\Action;

use App\Service\UserService;
use Exercises\Action\AnswerAction;
use Exercises\Service\LessonService;
use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class AnswerActionFactory
 * @package Exercises\Factory\Action
 */
class AnswerActionFactory implements FactoryInterface
{

    /**
     * Create an object
     *
     * @param  ContainerInterface $container
     * @param  string $requestedName
     * @param  null|array $options
     * @return object
     * @throws ServiceNotFoundException if unable to resolve the service.
     * @throws ServiceNotCreatedException if an exception is raised when creating a service.
     * @throws ContainerException if any other error occurs
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $action = new AnswerAction();
        $action->setUser($container->get(UserService::class));
        $action->setLesson($container->get(LessonService::class));

        return $action;
    }
}
