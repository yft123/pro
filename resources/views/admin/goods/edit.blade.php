@extends('admin.index')

@section('title')
<h3 class="page-header"><i class="fa fa-laptop"></i>商品更新</h3>
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
          	<form role="form" action="/goods/{{$goods->id}}" method="post" enctype="multipart/form-data">
              	<div class="form-group">
                    <label for="exampleInputEmail1">商品名称</label>
                    <input type="text" class="form-control" name="title" value="{{$goods->title}}">
              	</div>
                <div class="form-group">
                    <label for="exampleInputEmail1">内容简介</label>
                    <input type="text" class="form-control" name="con" value="{{$goods->con}}">
                </div>
  	            <div class="form-group">
  	                <label for="exampleInputPassword1">价格</label>
                    	<input type="text" class="form-control" name="price" value="{{$goods->price}}">
  	            </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">库存</label>
                      <input type="text" class="form-control" name="kucun" value="{{$goods->kucun}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">颜色</label>
                      <!-- <input type="text" class="form-control" name="color" value="{{$goods->color}}"> -->
                      <select class="form-control" style="width: 150px;" name="color">
                          <option value="{{$goods->color}}"></option>
                          <option>黑色</option>
                          <option>白色</option>
                          <option>蓝色</option>
                          <option>金色</option>
                          <option>红色</option>
                          <option>银色</option>
                          <option>透明</option>
                      </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">商品介绍</label>
                    <script id="editor" type="text/plain" name="content" style="width:700px;height:140px;">{!!$goods->content!!}</script>
                </div>
                <div class="form-group">
                    <img width="200" src="{{$goods->fig}}" alt="">
                    <hr>
                    <label for="exampleInputFile">头图</label>
                    <input type="file" name="fig">
                </div> 
                <div class="form-group">
                	   <label for="exampleInputFile">商品图片</label>
  	                 <input type="file" name="pic[]" multiple>
                </div> 
                  {{method_field('PUT')}}
                  {{csrf_field()}}        
                <button type="submit" class="btn btn-primary">更新</button>
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