<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use DB;

class HomeController extends Controller
{
     public function index(request $request)
    {
        $jd = DB::table('banner')->where('path',1)->get();
        $a = DB::table('banner')->where('path',2)->get();
    	return view('home.index',compact('jd','a'));
    }

    public function registered()
    {
    	return view('home.registered');
    }

    public function dor(Request $request)
    {
        $data = $request->only(['username','password','phone']);
        $code = $request->vcode;
        if(session('vcode') != $code) {
            return back()->with('msg','验证码错误');
        }else{
            $data['status']= 1;
        }
        
        $data['password'] = Hash::make($data['password']);
        if(DB::table('pro_user')->insert($data)) {
            return redirect('/home/login')->with('msg','注册成功,请登录');
        }else{
            return back()->with('msg','注册失败!!'); 
        }

    }

    public function order()
    {
        return view('home.order');
    }
}
