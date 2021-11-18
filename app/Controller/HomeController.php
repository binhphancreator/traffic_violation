<?php

namespace App\Controller;

use GoSafer\Controller\BaseController;
use GoSafer\Http\Request;
use App\Model\News;

class HomeController extends BaseController
{
    public function index(Request $request)
    {
        $news = (new News())->all();
        return view('index', ['news' => $news]);
    }

    public function introduction(Request $request)
    {
        return view('introduction');
    }

    public function terms(Request $request)
    {
        return view('terms');
    }
}