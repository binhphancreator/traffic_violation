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
        return view('document/document', ['documents' => $documents->all()]);
    }

    public function add(Request $request)
    {
        if(!auth()->loggined()) return redirect('/');
        return view('document/add');
    }

    public function create(Request $request)
    {
        $file = $request->file('file');
        if(is_null($file) || $file->size == 0) return redirect('/document/add')->with(['error' => 'Không có file tải lên.']);
        if($request->name == '') return redirect('/document/add')->with(['error' => 'Tên tài liệu không được để trống.']);

        $filename = uniqid().'.'.$file->ext;
        $file->save($filename);
        $document = new Document();
        $document->create([
            'name' => $request->name,
            'file' => $filename,
            'description' => $request->description,
        ]);
        return redirect('/document')->with(['notify' => 'Thêm mới tài liệu thành công']);
    }
}