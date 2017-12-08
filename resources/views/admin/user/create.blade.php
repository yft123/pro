@extends('admin.index')


@section('title')
  <h3 class="page-header"><i class="fa fa-laptop"></i> 用户添加</h3>
@endsection

@section('title2')
  <li><i class="fa fa-laptop"></i>user add</li> 
@endsection

@section("content")
  <div class="container-fluid" style="border: 1px solid #888;padding: 20px 0 200 20px;overflow: hidden;">
    <div class="col-lg-6">
        <section class="panel">
            <header class="panel-heading">
                user add
            </header>
            <div class="panel-body">
                <form role="form" action="/user" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">用户名:</label>
                        <input class="form-control" id="exampleInputEmail1" placeholder="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">密码:</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">确认密码</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="repassword" name="repassword">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">邮箱:</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">头像</label>
                        <input type="file" id="exampleInputFile" name="profile">
                    </div>
                    {{csrf_field()}}
                    <button type="submit" class="btn btn-primary">添加</button>
                    <button type="submit" class="btn btn-primary">重置</button>
                </form>
            </div>
        </section>
    </div>
  </div>
@endsection