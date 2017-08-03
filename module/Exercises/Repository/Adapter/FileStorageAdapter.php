<?php
/**
 * @author Pavel Tsydzik <xagero@gmail.com>
 * @date 03.08.2017 17:02
 */

namespace Exercises\Repository\Adapter;

/**
 * Адаптер к данным на основе файловой системы и php array
 *
 * Class ConfigStorageAdapter
 * @package Exercises\Repository\Adapter
 */
class FileStorageAdapter implements StorageInterface
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
