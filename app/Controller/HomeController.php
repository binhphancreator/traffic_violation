<?php

namespace App\Controller;

use GoSafer\Controller\BaseController;
use GoSafer\Http\Request;

class HomeController extends BaseController
{
    public function index(Request $request)
    {
        return view('index');
    }
}