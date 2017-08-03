<?php
/**
 * @author Pavel Tsydzik <xagero@gmail.com>
 * @date 03.08.2017 17:00
 */

namespace Exercises\Service;

use Exercises\Repository\ExercisesRepository;
use LogicException;

/**
 * Class LessonService
 * @package Exercises\Service
 */
class LessonService
{
    /**
     * @var ValidatorService
     */
    protected $validator;

    /**
     * @var ExercisesRepository
     */
    protected $repository;

    /**
     * @param ValidatorService $validator
     */
    public function setValidator(ValidatorService $validator)
    {
        $this->validator = $validator;
    }

    /**
     * @param ExercisesRepository $repository
     */
    public function setRepository(ExercisesRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return ExercisesRepository
     */
    public function getRepository(): ExercisesRepository
    {
        return $this->repository;
    }

    /**
     * Business logic, process user answer
     *
     * @param $uid
     * @param $data
     * @return array
     */
    public function process($uid, $data)
    {
        if (false === $this->validator->isValid($data)) {
            throw new LogicException('Invalid data provided');
        }

        // @TODO code me!


        $return = [
            [
                'correct' => true,
                'score' => 1
            ],
            [
                'correct' => false,
                'score' => -0.5
            ]
        ];

        return $return;
    }


}
