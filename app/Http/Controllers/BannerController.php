<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use DB;
class BannerController extends Controller
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
            $banner = DB::table('banner')
                ->where('id','like','%'.$keywords.'%')
                ->paginate($num);
        }else{
            //列表显示
            $banner = DB::table('banner')->paginate($num);
        }
        //解析模板
        return view('admin.banner.index', [
            'banner'=>$banner,
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
       // return view('admin.user.create');
       return view('admin.banner.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only('path');
        $data['time'] = date('Y-m-d H:i:s');
        //文件上传
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
            //将数据插入到数据库中
            if(DB::table('banner')->insert($data)) {
                return redirect('/banner')->with('msg','添加成功');
            }else{
                return back()->with('msg','添加失败!!');
            
            // echo 'ok';
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
        return '1';
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //读取当前图片的信息
        $banner = DB::table('banner')->where('id',$id)->first();
        return view('admin.banner.edit', ['banner'=>$banner]);
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
        //获取数据
        $data = $request->only(['id','img','time','status','path']);
        $data['time'] = date('Y-m-d H:i:s');
        //图片上传
        //文件上传
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
        //更新
        if(DB::table('banner')->where('id',$id)->update($data)) {
            return redirect('/banner')->with('msg','更新成功');
        }else{
            return back()->with('msg','更新失败');
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
        //执行删除
        if(DB::table('banner')->where('id', $id)->delete()) {
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败!!');
        }
    }
}