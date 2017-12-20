<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use DB;

class HomeController extends Controller
{
     public function index(request $request)
    {
        $video  = DB::table('video')->where('status',1)->get();
        $nava = DB::table('goods')->where('fl_id','11')->paginate(5);
       $navb = DB::table('goods')->where('fl_id','11')->skip(6)->take(5)->get();
        $navc = DB::table('goods')->where('fl_id','20')->paginate(4);
        $jd = DB::table('banner')->where('path',1)->get();
        $a = DB::table('banner')->where('path',2)->get();
        //遍历一级分类
        $cat = DB::table('cates')->where('pid','0')->get();
        $art = DB::table('articles')->where('path','0')->get();
        $goods = DB::table('goods')->get();
        foreach ($cat as $k => $v) {
            $v->goods = DB::table('goods')->where('fl_id', $v->id)->get();
        }
        $stars=DB::table('goods')->where('path','1')->get();
        $jiad = DB::table('banner')->where('path','家电')->get();
        $zhin = DB::table('banner')->where('path','智能')->get();
        $dap = DB::table('banner')->where('path','搭配')->get();
        $zhoubian = DB::table('banner')->where('path','周边')->get();
        $jhot = DB::table('goods')->where('path','jhot')->get();
        $zhot = DB::table('goods')->where('path','zhot')->get();
        $dhot = DB::table('goods')->where('path','dhot')->get();
        $zhoubianhot = DB::table('goods')->where('path','zhoubian')->get();
    	return view('home.index',compact('jd','a','cat','stars','video','jiad','zhin','jhot','zhot','dap','dhot','zhoubian','zhoubianhot','nava','navb','navc','art'));
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

    //退出登录
    public function quit()
    {
        session()->forget('id');
        return redirect('/home');
    }

    public function order()
    {
        $nava = DB::table('goods')->where('fl_id','11')->paginate(5);
        $navb = DB::table('goods')->where('fl_id','11')->skip(6)->take(5)->get();
        $navc = DB::table('goods')->where('fl_id','20')->paginate(4);
        $order = DB::table('dingdans')->where('status','1')->get();
        return view('home.order',compact('nava','navb','navc','order'));
    }

    public function a()
    {
       $nava = DB::table('goods')->where('fl_id','11')->paginate(5);
       $navb = DB::table('goods')->where('fl_id','11')->skip(6)->take(5)->get();
       $navc = DB::table('goods')->where('fl_id','20')->paginate(4);
        return view('home.home',compact('nava','navb','navc'));
    }
}
