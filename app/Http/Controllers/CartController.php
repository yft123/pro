<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $nava = DB::table('goods')->where('fl_id','11')->paginate(5);
        $navb = DB::table('goods')->where('fl_id','11')->skip(6)->take(5)->get();
        $navc = DB::table('goods')->where('fl_id','20')->paginate(4);
    	$data = $request->only(['goods_id']);
        $goods = DB::table('goods')->where('id',$data)->select('id','title')->first();
        $carts = DB::table('carts')->where('goods_id',$data)->get();
    	$data['addtime'] = date('Y-m-d H:i:s');
    	$data['user_id'] = session('id');
        // if (count($carts) > 0) {
        //     DB::table('carts')->where('goods_id',$data)->update();
        // }
    	if ($res = DB::table('carts')->insert($data)) {
    		return view('home.remind.cart',compact('goods','nava','navb','navc'));
    	}else{
    		return back()->with('msg','加入失败');
    	}
    }

    public function shopping()
    {
        $id = session('id');
        $goods = DB::table('carts')->where('user_id',$id)->get();
        foreach ($goods as $k => &$v) {
            $v->d = DB::table('goods')->where('id',$v->goods_id)->first();

            $v->pic = DB::table('goods_pic')->where('goods_id',$v->goods_id)->first();
        }
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
