<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $num = $request->input('num', 10);
        $keywords = $request->input('keywords','');

        //关键字检索
        if($request->has('keywords')) {
            //列表显示
            $goods = DB::table('goods')
                ->where('title','like','%'.$keywords.'%')
                ->paginate($num);
        }else{
            //列表显示
            $goods = DB::table('goods')->paginate($num);
        }


        //解析模板
        return view('admin.goods.index', [
            'goods'=>$goods,
            'keywords' => $keywords,
            'num' => $num
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cates = DB::table('cates')->get(); 
        //分配变量 解析模板
        return view('admin.goods.create', compact('cates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['title','price','kucun','color','content','fl_id','path','con']);
        $data['addtime'] = date('Y-m-d H:i:s');
        $data['status'] = 1; 
        if($request->hasFile('fig')) {
            //获取文件的后缀名
            $suffix = $request->file('fig')->extension();
            //创建一个新的随机名称
            $name = uniqid('img_').'.'.$suffix;

            //文件夹路径
            $dir = './uploads/'.date('Y-m-d');
            //移动文件
            $request->file('fig')->move($dir, $name);
            //获取文件的路径
            $data['fig'] = trim($dir.'/'.$name,'.');

        }

        $insert = DB::table('goods')->insertGetId($data);       
        if ($insert >0) {
            if ($request->hasfile('pic')){
                //遍历上传数组
                $img = [];
                foreach ($request->file('pic') as $k => $v) {
                    $tmp= [];
                    //获取文件的后缀名
                    $suffix = $v->extension();
                    //创建一个新的随机名称
                    $name = uniqid('img_').'.'.$suffix;
                    //文件夹路径
                    $dir = './uploads/'.date('Y-m-d');
                    //移动文件
                    $v->move($dir, $name);
                    //获取文件的路径
                    $tmp['goods_id']=$insert;
                    $tmp['pic']=trim($dir.'/'.$name,'.');
                    $img[] = $tmp;
                }
                DB::table('goods_pic')->insert($img);
            }
            return redirect('/goods')->with('msg','添加成功');
        }else{
            return redirect('/goods')->with('msg','添加失败');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $goods = DB::table('goods')->where('id',$id)->first();
        $goods_pic = DB::table('goods_pic')->where('goods_id', $id)->get();
        $nava = DB::table('goods')->where('fl_id','11')->paginate(5);
        $navb = DB::table('goods')->where('fl_id','11')->skip(6)->take(5)->get();
       $navc = DB::table('goods')->where('fl_id','20')->paginate(4);
        return view('home.goods.show', compact('goods','goods_pic','nava','navb','navc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $goods = DB::table('goods')->where('id',$id)->first();

        return view('admin.goods.edit', ['goods'=>$goods]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->only(['title','price','kucun','content','fig','color','path','con']);
        $data['addtime'] = date('Y-m-d H:i:s');
        $data['status'] = 1; 
        if($request->hasFile('fig')) {
            //获取文件的后缀名
            $suffix = $request->file('fig')->extension();
            //创建一个新的随机名称
            $name = uniqid('img_').'.'.$suffix;

            //文件夹路径
            $dir = './uploads/'.date('Y-m-d');
            //移动文件
            $request->file('fig')->move($dir, $name);
            //获取文件的路径
            $data['fig'] = trim($dir.'/'.$name,'.');

        }

        $insert = DB::table('goods')->where('id', $id)->update($data);
        

        if ($insert >0) {
            if ($request->hasfile('pic')){
                //删除原来的图片
                DB::table('goods_pic')->where('goods_id',$id)->delete();
                //遍历上传数组
                // unlink()
                $img = [];
                foreach ($request->file('pic') as $k => $v) {
                    $tmp= [];
                    //获取文件的后缀名
                    $suffix = $v->extension();
                    //创建一个新的随机名称
                    $name = uniqid('img_').'.'.$suffix;
                    //文件夹路径
                    $dir = './uploads/'.date('Y-m-d');
                    //移动文件
                    $v->move($dir, $name);
                    //获取文件的路径
                    $tmp['goods_id']=$id;
                    $tmp['pic']=trim($dir.'/'.$name,'.');
                    $img[] = $tmp;
                }
                DB::table('goods_pic')->insert($img);
            }
            return redirect('/goods')->with('msg','添加成功');
        }else{
            return redirect('/goods')->with('msg','添加失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if(DB::table('goods')->where('id', $id)->delete()) {
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败!!');
        }
    }

    public function lists()
    {
        $nava = DB::table('goods')->where('fl_id','11')->paginate(5);
        $goods = DB::table('goods')
                ->where('status',1)
                ->select('id','title','price','fig')
                ->orderBy('id','desc')
                ->paginate(30);
         $nava = DB::table('goods')->where('fl_id','11')->paginate(5);
       $navb = DB::table('goods')->where('fl_id','11')->skip(6)->take(5)->get();
        $navc = DB::table('goods')->where('fl_id','20')->paginate(4);
        return view('home.goods.lists',compact('goods','nava','navb','navc'));
    }

}
