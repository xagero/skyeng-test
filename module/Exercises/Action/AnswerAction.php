<?php
/**
 * @author Pavel Tsydzik <xagero@gmail.com>
 * @date 03.08.2017 16:39
 */

namespace Exercises\Action;

use App\Service\UserService;
use Exercises\Service\LessonService;
use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use RuntimeException;
use Zend\Diactoros\Response\JsonResponse;

/**
 * Middleware, class AnswerAction
 * @package Exercises
 */
class AnswerAction implements MiddlewareInterface
{
    /**
     * @var LessonService
     */
    protected $lesson;

    /**
     * @var UserService
     */
    protected $user;

    /**
     * @param LessonService $lesson
     */
    public function setLesson(LessonService $lesson)
    {
        $this->lesson = $lesson;
    }

    /**
     * @param UserService $user
     */
    public function setUser(UserService $user)
    {
        $this->user = $user;
    }

    /**
     * Process an incoming server request and return a response, optionally delegating
     * to the next middleware component to create the response.
     *
     * @param ServerRequestInterface $request
     * @param DelegateInterface $delegate
     *
     * @return ResponseInterface
     */
    public function process(ServerRequestInterface $request, DelegateInterface $delegate)
    {
        // Validate JSON
        if (null === ($data = json_decode($request->getBody(), true))) {
            //throw new RuntimeException('Invalid JSON provided.', 100);
        }

        $result = [];
        $result['data'] = $this->lesson->process($this->user->getId(), $data);

        $result['system'] = [
            'user' => get_class($this->user),
            'repository' => get_class($this->lesson->getRepository()),
            'storage-adapter' => get_class($this->lesson->getRepository()->getStorageAdapter())
        ];


        return new JsonResponse($result);
    }
}
