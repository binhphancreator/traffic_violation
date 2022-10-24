<?php

namespace App\Controller;

use App\Model\Report;
use GoSafer\Controller\BaseController;
use GoSafer\Http\Request;
use PDOException;

class ReportController extends BaseController
{
    public function showCreateForm(Request $request)
    {
        if(!auth()->loggined()) return redirect('/');
        return view('report/add');
    }

    public function create(Request $request)
    {
        $validate = $request->code!='' && $request->title!='' && $request->created_at!='' && $request->content!='';
        if(!$validate) return redirect('/reports/add')->with(['error' => 'Mã biên bản, tiêu đề, ngày lập, nội dung không được để trống.']);
        $data = $request->all();
        $report = new Report();
        try {
            $report->create($data);
        } catch(PDOException $e) {
            return redirect('/reports/add')->with(['error' => 'Mã biên bản đã tồn tại.']);
        }
        return redirect('/reports/add')->with(['notify' => 'Thêm mới biên bản thành công']);
    }

    public function showLookupForm(Request $request)
    {
        return view('report/lookup');
    }

    public function lookup(Request $request)
    {
        $report = (new Report())->where('code', $request->code)->first();
        $response = [
            'status' => $report!=null,
            'data' => $report ? $report->get() : null,
        ];
        return $response;
    }
}
