<?php

use MyBlog\Repositories\UserRepository;

class UserController extends \BaseController
{
    /** @var UserRepository */
    private $userRepository;

    /**
     * UserController constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = $this->userRepository->getAgeLargerThan(10);

        return View::make('users.index', compact('users'));
    }
}
