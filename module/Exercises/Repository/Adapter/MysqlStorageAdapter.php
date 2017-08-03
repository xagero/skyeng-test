<?php
/**
 * @author Pavel Tsydzik <xagero@gmail.com>
 * @date 03.08.2017 17:08
 */

namespace Exercises\Repository\Adapter;

/**
 * Class MysqlStorageAdapter
 * @package Exercises\Repository\Adapter
 */
class MysqlStorageAdapter implements StorageInterface
{

    /**
     * @param $uid
     * @param $lid
     * @param $score
     *
     * @return boolean
     */
    public function updateScore($uid, $lid, $score)
    {
        // TODO: Implement updateScore() method.
    }
}
