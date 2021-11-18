<?php

namespace App\Controller;

use App\Model\News;
use GoSafer\Controller\BaseController;
use GoSafer\Http\ExceptionResponse;
use GoSafer\Http\Request;

class NewsController extends BaseController
{
    public function index(Request $request)
    {
        $news = (new News())->all();
        return view('news/news', ['news' => $news]);
    }

    public function show(Request $request)
    {
        $id = $request->id ?? 0;
        $news = (new News())->find($id);
        if(is_null($news)) return new ExceptionResponse();
        return view('news/detail', ['news' => $news]);
    }
}