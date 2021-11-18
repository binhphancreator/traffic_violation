<?php

namespace App\Controller;

use App\Model\Report;
use GoSafer\Controller\BaseController;
use GoSafer\Http\Request;

class ReportController extends BaseController
{
    public function showCreateForm(Request $request)
    {
        if(!auth()->loggined()) return redirect('/');
        return view('report/add');
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $report = new Report();
        $report->create($data);
        return redirect('/reports/add')->with(['notify' => 'Thêm mới biên bản thành công']);
    }

    public function showLookupForm(Request $request)
    {
        if(!auth()->loggined()) return redirect('/');
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