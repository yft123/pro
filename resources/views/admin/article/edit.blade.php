@extends('admin.index')

@section('title')
<h3 class="page-header"><i class="fa fa-laptop"></i>文章更新</h3>
@endsection

@section('content') 
<script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/plugins/ueditor/ueditor.all.min.js"> </script>
    <script type="text/javascript" charset="utf-8" src="/plugins/ueditor/lang/zh-cn/zh-cn.js"></script>
<div class="row">
 	<section class="panel">
        <div class="panel-body">
            <form class="form-horizontal" role="form" action="/article/{{$article->id}}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-lg-2 control-label">文章标题</label>
                    <div class="col-lg-10">
                        <input type="username" class="form-control" value="{{$article->title}}" name="title" id="inputusername" placeholder="admin">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">文章价格</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" value="{{$article->price}}" name="price">
                    </div>
                </div>
                <div class="form-group">
                    <img src="{{$article->pic}}" alt="">
                    <hr>
                    <label class="col-lg-2 control-label">文章图像</label>
                    <div class="col-lg-10">
                        <input type="file" class="form-control" id="inputEmail" name="pic">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">文章内容</label>
        <script id="editor" name="content" type="text/plain" style="width:1000px;">{!!$article->content!!}</script>
                    <div class="col-lg-10">
                        <textarea name="content" class="form-control"></textarea>
                    </div>
                </div>
                {{method_field('PUT')}}
                {{csrf_field()}}
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button type="submit" class="btn btn-danger">更新</button>
                        <button type="reset" class="btn btn-primary">重置</button>
                    </div>
                </div>
            </form>
        </div>
	</section>  
</div> 

<script>
    var ue = UE.getEditor('editor');
</script>
@endsection 


















