<?php
/**
 * @author Pavel Tsydzik <xagero@gmail.com>
 * @date 03.08.2017 17:20
 */

namespace App\Service;

/**
 * Class UserService
 * @package App\Service
 */
class UserService
{
    /**
     * Get user ID
     */
    public function getId()
    {
        // Temporary
        $id = rand(0, 999999);

        return $id;
    }
}
