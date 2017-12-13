@extends('admin.index')

@section('title')
<h3 class="page-header"><i class="fa fa-laptop"></i>商品添加</h3>
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
          	<form role="form" action="/goods" method="post" enctype="multipart/form-data">
              	<div class="form-group">
                    <label for="exampleInputEmail1">商品名称</label>
                    <input type="text" class="form-control" name="title">
              	</div>
	            <div class="form-group">
	                <label for="exampleInputPassword1">价格</label>
                  	<input type="text" class="form-control" name="price">
	            </div>
              <div class="form-group">
                  <label for="exampleInputPassword1">库存</label>
                    <input type="text" class="form-control" name="kucun">
              </div>
              <div class="form-group pull-left">
                  <label for="exampleInputPassword1">颜色</label>
                  <select class="form-control" style="width: 150px;" name="color">
                    <option>黑色</option>
                    <option>白色</option>
                    <option>蓝色</option>
                    <option>红色</option>
                    <option>银色</option>
                    <option>透明</option>
                  </select>
              </div>
              <div class="form-group pull-left col-md-offset-1">
                  <label for="exampleInputPassword1">版本</label>
                  <select class="form-control" style="width: 150px;" name="banben">
                    <option>4g+16G</option>
                    <option>4g+32G</option>
                    <option>4g+64G</option>
                    <option>6g+64G</option>
                    <option>33寸</option>
                    <option>43寸</option>
                    <option>49寸</option>
                    <option>55寸</option>
                    <option>65寸</option>
                  </select>
              </div>
              <div class="form-group" style="clear: both;">
                  <label for="exampleInputPassword1">商品介绍</label>
                  <script id="editor" type="text/plain" name="content" style="width:700px;height:140px;"></script>
              </div>
              <div class="form-group">
                  <label for="exampleInputFile">头图</label>
                  <input type="file" name="fig">
              </div> 
              <div class="form-group">
	                <label for="exampleInputFile">商品图片</label>
	                <input type="file" name="pic[]" multiple>
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