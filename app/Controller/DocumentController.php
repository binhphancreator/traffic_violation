<?php

namespace App\Controller;

use App\Model\Document;
use GoSafer\Controller\BaseController;
use GoSafer\Http\Request;

class DocumentController extends BaseController
{
    public function index(Request $request)
    {
        $documents = new Document();
        return view('document', ['documents' => $documents->all()]);
    }
}