<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //后台主页

	public function index() {

		

		return view('admin.index.index',['title'=>'后台首页']);

	}

	public function session(Request $request){

		$request->session()->forget('info');
		
		

		

	}
}
