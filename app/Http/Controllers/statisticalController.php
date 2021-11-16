<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dashboard;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard as HtmlDashboard;

class statisticalController extends Controller
{
    public function getStatistical(){
    	$dashboard= dashboard::all();
    	return view("admin.statistical.sales")->with(compact("dashboard"));
    }
    public function postStatistical(Request $request){
    	$data= $request->all();

    	return view("admin.statistical.sales")->with(compact("dashboard"));
    }


}
