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
        return view('admin.goods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->only(['title','price','kucun','content','fig']);
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
        //读取商品的图片信息
        $goods_pic = DB::table('goods_pic')->where('goods_id', $id)->get();

        return view('home.goods.show', compact('goods','goods_pic'));
        
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
        //
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
    }

    public function lists()
    {
        $goods = DB::table('goods')
                ->where('status',1)
                ->select('id','title','price','fig')
                ->orderBy('id','desc')
                ->paginate(30);
        return view('home.goods.lists',compact('goods'));
    }

}
