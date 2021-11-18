<?php

namespace App\Controller;

use App\Model\Document;
use GoSafer\Controller\BaseController;
use GoSafer\Http\ExceptionResponse;
use GoSafer\Http\Request;
use GoSafer\Storage\File;

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

    public function delete(Request $request)
    {
        $document = (new Document())->find($request->id);
        if($document) {
            File::delete($document->file);
            $document->delete();
        }
        return $document->get();
    }

    public function showFormUpdate(Request $request)
    {
        $id = $request->id ?? 0;
        $document = (new Document())->find($id);
        if(!$document) return new ExceptionResponse();
        return view('document/update', ['document' => $document]);
    }

    public function update(Request $request)
    {
        $file = $request->file('file');
        $document = (new Document)->find($request->id);
        if($request->name == '') return redirect('/document/add')->with(['error' => 'Tên tài liệu không được để trống.']);
        $fileUploaded = !(is_null($file) || $file->size == 0);
        if($fileUploaded) {
            $filename = uniqid().'.'.$file->ext;
            $file->save($filename);
            File::delete($document->file);
            $document->file = $filename;
        }

        $document->name = $request->name;
        $document->description = $request->description;

        $document->update();
        return redirect('/document')->with(['notify' => 'Cập nhật tài liệu thành công']);
    }
}