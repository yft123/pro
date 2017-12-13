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
        $user = DB::table('pro_user')->where('username', $data['user'])->first();
        if(empty($user)) {
            return back()->with('msg','登陆失败!!');
        }

        if (Hash::check($data['password'], $user->password)) {
            // 密码对比...写入session信息
            session(['id'=>$user->id]);
            session(['username'=>$user->username]);

            //登陆成功
            return redirect('/home')->with('msg','登陆成功');
            
        }
        return back()->with('msg','登陆失败!!');
    }
}
