@extends('admin.index')

@section('title')
<h3 class="page-header"><i class="fa fa-laptop"></i>分类添加</h3>
@endsection

@section('content') 
<div class="row">
  <section class="panel">
        <div class="panel-body">
            <form class="form-horizontal" role="form" action="/cate" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-lg-2 control-label">分类名称</label>
                    <div class="col-lg-10">
                        <input class="form-control" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">顶级分类</label>
                    <div class="col-lg-10">
                    <select class="form-control" name="pid">
                        <option value="0">顶级分类</option>
                        @foreach($cates as $k=>$v)
                        <option value="{{$v->id}}">{{$v->name}}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">文章图像</label>
                    <div class="col-lg-10">
                        <input type="file" class="form-control" id="inputEmail" name="pic[]" multiple>
                    </div>
                </div>
                {{csrf_field()}}
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button type="submit" class="btn btn-danger">添加</button>
                        <button type="reset" class="btn btn-primary">重置</button>
                    </div>
                </div>
            </form>
        </div>
  </section>  
</div> 
@endsection 


















