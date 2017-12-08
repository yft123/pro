<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
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
            $users = DB::table('users')
                ->where('username','like','%'.$keywords.'%')
                ->paginate($num);
        }else{
            //列表显示
            $users = DB::table('pro_user')->paginate($num);
        }

        return view('admin.user.index', [
            'users'=>$users,
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
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());die;
        $data = $request->only(['username','password','email']);
        // dd($data);die;
        $data['password'] = encrypt($data['password']);
        //文件上传
        // dd($data);die;
        if ($request->hasFile('profile')) {
            $suffix = $request->file('profile')->extension();
            $name = uniqid('img_');

            $dir = './uploads/'.date('Y-m-d');
            $request->file('profile')->move($dir, $name);
            // dd($request);die;
            //获取文件的路径
            $data['profile'] = trim($dir.'/'.$name,'.');
        }
        $data['status'] = 0;

        //将数据插入到数据库中
        if(DB::table('pro_user')->insert($data)) {
            return redirect('/user')->with('msg','添加成功');
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
}
