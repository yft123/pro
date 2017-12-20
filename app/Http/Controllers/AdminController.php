<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index()
    {
    	$user = DB::table('user')->where('status',1)->first();
       	return view('admin.index');
    }
}
