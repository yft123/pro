<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function message(Request $request)
    {
    	$phone=$request->input('phone');

    	$web = 'random';
    	$code = rand(100000,999999);

    	session(['vcode'=>$code]);

    	$data['resp']['respCode'] = '000000';
    	if ($data['resp']['respCode'] == '000000') {
    		return response()->json(['data'=>['vcode'=>$code],'status'=>'1','msg'=>'发送成功']);
    	}else{
    		return response()->json(['data'=>'','status'=>'0','msg'=>'发送失败']);
    	}
    }
}
