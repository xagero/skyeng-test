<?php
/**
 * @author Pavel Tsydzik <xagero@gmail.com>
 * @date 03.08.2017 17:06
 */

namespace Exercises\Repository\Adapter;

/**
 * Interface StorageInterface
 * @package Exercises\Repository\Adapter
 */
interface StorageInterface
{

    /**
     * @param $uid
     * @param $lid
     * @param $score
     *
     * @return boolean
     */
    public function updateScore($uid, $lid, $score);
}
