<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CartController extends Controller
{
    public function store(Request $request)
    {
    	$data = $request->only(['goods_id']);
        $goods = DB::table('goods')->where('id',$data)->select('id','title')->first();
    	$data['addtime'] = date('Y-m-d H:i:s');
    	$data['user_id'] = session('id');
    	if ($res = DB::table('carts')->insert($data)) {
    		return view('home.remind.cart',compact('goods'));
    	}else{
    		return back()->with('msg','加入失败');
    	}
    }

    public function shopping()
    {
        $id = session('id');
        $goods = DB::table('carts')->where('user_id',$id)->get();
        // dd($goods);
        foreach ($goods as $k => &$v) {
            $v->detail = DB::table('goods')->where('id',$v->goods_id)->first();

            $v->pic = DB::table('goods_pic')->where('goods_id',$v->goods_id)->first();
        }
        // dd($goods);
        return view('home.cart.shopping',compact('goods'));
    }

    public function delete(Request $request)
    {
        //获取id
        $id = $request->input('cid');
        if(DB::table('carts')->where('id', $id)->delete()) {
            echo 1;
        }else{
            echo 0;
        }
    }
}
