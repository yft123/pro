<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class VideoController extends Controller
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
            $video = DB::table('video')
                ->where('title','like','%'.$keywords.'%')
                ->paginate($num);
        }else{
            //列表显示
            $video = DB::table('video')->paginate($num);
        }

        return view('admin.video.index', [
             'video'=>$video,
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
        return view('admin.video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['title','content']);
        $data['addtime'] = date('Y-m-d H:i:s');
        $data['status'] = 1;
        if($request->hasFile('img')) {
            //获取文件的后缀名
            $suffix = $request->file('img')->extension();
            //创建一个新的随机名称
            $name = uniqid('img_').'.'.$suffix;
            //文件夹路径
            $dir = './uploads/'.date('Y-m-d');
            //移动文件
            $request->file('img')->move($dir, $name);
            //获取文件的路径
            $data['img'] = trim($dir.'/'.$name,'.');
        }
        if($request->hasFile('video')) {
            //获取文件的后缀名
            $suffix = $request->file('video')->getClientOriginalExtension();
            //创建一个新的随机名称
            $name = uniqid('video_').'.'.$suffix;
            // dd($name);
            //文件夹路径
            $dir = './uploads/'.date('Y-m-d');
            //移动文件
            $request->file('video')->move($dir, $name);
            //获取文件的路径
            $data['video'] = trim($dir.'/'.$name,'.');
        }
            //将数据插入到数据库中
            if(DB::table('video')->insert($data)) {
                return redirect('/video')->with('msg','添加成功');
            }else{
                return back()->with('msg','添加失败!!');
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
         $video = DB::table('video')->where('id',$id)->first();
        return view('admin.video.edit',compact('video'));
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
        $data = $request->only(['title','content']);
        $data['addtime'] = date('Y-m-d H:i:s');
        $data['status'] = 1;
        if($request->hasFile('img')) {
            //获取文件的后缀名
            $suffix = $request->file('img')->extension();
            //创建一个新的随机名称
            $name = uniqid('img_').'.'.$suffix;
            //文件夹路径
            $dir = './uploads/'.date('Y-m-d');
            //移动文件
            $request->file('img')->move($dir, $name);
            //获取文件的路径
            $data['img'] = trim($dir.'/'.$name,'.');
        }
        if($request->hasFile('video')) {
            //获取文件的后缀名
            $suffix = $request->file('video')->getClientOriginalExtension();
            //创建一个新的随机名称
            $name = uniqid('video_').'.'.$suffix;
            // dd($name);
            //文件夹路径
            $dir = './uploads/'.date('Y-m-d');
            //移动文件
            $request->file('video')->move($dir, $name);
            //获取文件的路径
            $data['video'] = trim($dir.'/'.$name,'.');
        }
            //将数据插入到数据库中
            if(DB::table('video')->where('id',$id)->update($data)) {
                return redirect('/video')->with('msg','添加成功');
            }else{
                return back()->with('msg','添加失败!!');
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
        if(DB::table('video')->where('id', $id)->delete()) {
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败!!');
        }
    }
}
