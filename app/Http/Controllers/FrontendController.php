<?php

namespace App\Http\Controllers;

use App\Enjoythetrip\Repositories\FrontendRepository;
use App\Enjoythetrip\Interfaces\FrontendRepositoryInterface;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * FrontendController constructor.
     * @param FrontendRepositoryInterface $frontendRepository
     */
    public function __construct(FrontendRepositoryInterface $frontendRepository) /* Lecture 13 FrontendRepositoryInterface */
    {
        $this->fR = $frontendRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $objects = $this->fR->getObjectsForMainPage();

        return view('frontend.index', ['objects' => $objects]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function article()
    {
        return view('frontend.article');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function object($id)
    {
        $object = $this->fR->getObject($id);
        //dd($object);
        return view('frontend.object', ['object' => $object]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function person()
    {
        return view('frontend.person');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function room()
    {
        return view('frontend.room');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function roomsearch()
    {
        return view('frontend.roomsearch');
    }


}