<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SinglegoodsController extends Controller
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
            $Singlegoods = DB::table('Singlegoods')
                ->where('title','like','%'.$keywords.'%')
                ->paginate($num);
        }else{
            //列表显示
            $Singlegoods = DB::table('Singlegoods')->paginate($num);
        }

        return view('admin.Singlegoods.index', [
             'Singlegoods'=>$Singlegoods,
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
        return view('admin.Singlegoods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['title','price','kucun','content']);
        $data['addtime'] = date('Y-m-d H:i:s');

         $insert = DB::table('singlegoods')->insertGetId($data);

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
                    $tmp['singlegoods_id']=$insert;
                    // dd($tmp);
                    $tmp['pic']=trim($dir.'/'.$name,'.');
                    $img[] = $tmp;
                }
                DB::table('singlegoods_pic')->insert($img);
            }
            return redirect('/Singlegoods')->with('msg','添加成功');
        }else{
            return redirect('/Singlegoods')->with('msg','添加失败');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $Singlegoods = DB::table('singlegoods')->where('id',$id)->first();
        return view('admin.Singlegoods.edit', [
            'Singlegoods'=>$Singlegoods
        ]);
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
}
