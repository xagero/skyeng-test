<?php
/**
 * @author Pavel Tsydzik <xagero@gmail.com>
 * @date 03.08.2017 16:52
 */

namespace Exercises\Repository;

use Exercises\Repository\Adapter\StorageInterface;

/**
 * Doctrine-style compatibility repository
 *
 * Class ExercisesRepository
 * @package Exercises\Repository
 */
class ExercisesRepository
{
    /**
     * Storage adapter
     * @var StorageInterface
     */
    protected $storageAdapter;

    /**
     * @param mixed $storageAdapter
     */
    public function setStorageAdapter($storageAdapter)
    {
        $this->storageAdapter = $storageAdapter;
    }

    /**
     * @return StorageInterface
     */
    public function getStorageAdapter(): StorageInterface
    {
        return $this->storageAdapter;
    }

    /**
     * Update score for current UID as LID
     *
     * @param int $uid User ID
     * @param string $lid Lesson ID
     * @return boolean
     */
    public function updateScore($uid, $lid, $score)
    {
        return $this->storageAdapter->updateScore($uid, $lid, $score);
    }



}
