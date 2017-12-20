<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;

class LoginController extends Controller
{
   	 public function login()
    {
    	return view('home.login.index');
    }

    public function homelogin(request $request)
    {
        $data = $request->except(['_token']);
        // dd($data);
        //检测数据是否正确
        $user = DB::table('pro_user')->where('phone', $data['phone'])->first();
        if(empty($user)) {
            return back()->with('msg','登陆失败!!');
        }

        if (Hash::check($data['password'], $user->password)) {
            // 密码对比...写入session信息
            session(['id'=>$user->id]);
            session(['phone'=>$user->phone]);

            //登陆成功
            return redirect('/home')->with('msg','登陆成功');
            
        }
        return back()->with('msg','登陆失败!!');
    }


    //后台登录
    public function admin()
    {
        return view('admin.login.index');
    }

    public function adminlogin(Request $request)
    {
        //提取参数
        $data = $request->except(['_token']);

        //检测数据是否正确 根据用户名来查找用户信息
        $user = DB::table('users')->where('username', $data['username'])->first();

        //判断 没有这个用户
        if(empty($user)) {
            return back()->with('msg','登陆失败!!');
        }
        //校验密码
        if (Hash::check($data['password'], $user->password)) {
            // 密码对比...写入session信息
            session(['id'=>$user->id]);
            session(['username'=>$user->username]);

            //登陆成功
            return redirect('/admin')->with('msg','登陆成功');
            
        }
        return back()->with('msg','登陆失败!!');
        //

    }
}
