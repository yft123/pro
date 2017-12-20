@extends('admin.index')

@section('title')
<h3 class="page-header"><i class="fa fa-laptop"></i>视频添加</h3>
@endsection

@section('content')
<script type="text/javascript" charset="utf-8" src="/plugings/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/plugings/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/plugings/ueditor/lang/zh-cn/zh-cn.js"></script>
              
<div class="row">
<div class="col-lg-6">
        <div class="panel-body">
            <form role="form" action="/video" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">视频名称</label>
                    <input type="text" class="form-control" name="title">
                </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">视频介绍</label>
                  <script id="editor" type="text/plain" name="content" style="width:700px;height:140px;"></script>
              </div>
              <div class="form-group">
                  <label for="exampleInputFile">图片上传</label>
                  <input type="file" name="img">
              </div>
              <div class="form-group">
                  <label for="exampleInputFile">视频上传</label>
                  <input type="file" name="video">
              </div> 
                {{csrf_field()}}        
              <button type="submit" class="btn btn-primary">添加</button>
            </form>
        </div>
    
</div>
</div>

 <script>
    var ue = UE.getEditor('editor',{
        // toolbars: [
        //     ['fullscreen', 'source', 'undo', 'redo', 'bold']
        // ]
    });
 </script>             
@endsection