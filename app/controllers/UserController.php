<?php

use Illuminate\Http\Request;
use MyBlog\Presenters\DateFormatPresenterFactory;
use MyBlog\Repositories\UserRepository;

class UserController extends \BaseController
{
    /** @var UserRepository */
    protected $userRepository;
    /** @var DateFormatPresenterFactory */
    protected $dateFormatPresenterFactory;

    /**
     * UserController constructor.
     * @param UserRepository $userRepository
     * @param DateFormatPresenterFactory $dateFormatPresenterFactory
     */
    public function __construct(UserRepository $userRepository,
        DateFormatPresenterFactory $dateFormatPresenterFactory)
    {
        $this->userRepository = $userRepository;
        $this->dateFormatPresenterFactory = $dateFormatPresenterFactory;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = $this->userRepository->getAgeLargerThan(10);

        $locale = (Input::get('lang')) ? Input::get('lang') : 'us';

        $dateFormatPresenter = $this->dateFormatPresenterFactory->create($locale);

        return View::make('users.index', compact('users', 'dateFormatPresenter'));
    }
}
