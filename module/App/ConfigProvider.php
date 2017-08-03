<?php
/**
 * @author Pavel Tsydzik <xagero@gmail.com>
 * @date 03.08.2017 16:25
 */

namespace App;

/**
 * Class ConfigProvider
 * @package App
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
            'invokables' => [

            ],
            'factories' => [
                Action\HomeAction::class => Factory\Action\HomeActionFactory::class,
                Service\UserService::class => Factory\Service\UserServiceFactory::class
            ],
//            'delegators' => [
//
//            ]
        ];
    }
}
