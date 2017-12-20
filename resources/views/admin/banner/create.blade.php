@extends('admin.index')

@section('title')
<h3 class="page-header"><i class="fa fa-laptop"></i>广告添加</h3>
@endsection

@section('content')
<script type="text/javascript" src="/homes/js/jquery-3.2.1.js"></script>
<script type="text/javascript">
  
</script>
<style type="text/css">
  .a{
    width:40px;
    height: 40px;
    display: block;
    position: absolute;
    top: 53%;
    right: 24%;
    border-radius: 20px;
  }
</style>
<div style="position: relative;">
  <img src="/homes/img/mj-air2s-01.jpg" width="100%">
  <a href="" class="a"></a>
</div>
<div class="row" style="position: absolute;top: 200px;">
  <div class="col-lg-6">
    	<div class="panel-body">
        	<form role="form" action="/banner" method="post" enctype="multipart/form-data">
            	<div class="form-group">
                <label for="exampleInputFile" style="color: #000;">上传图片</label>
                <input type="file" name="img"  style="color: #000;">
              </div>
              <div class="form-group">
                <label for="exampleInputFile" style="color: #000;">图片位置</label>
                <select name="path">
                  <option>1</option>
                  <option>2</option>
                  <option>家电</option>
                  <option>智能</option>
                  <option>搭配</option>
                  <option>周边</option>
                </select>
              </div> 
              {{csrf_field()}}        
              <button type="submit" class="btn btn-primary">添加</button>
          </form>
      </div>
  </div>
</div>
                 
@endsection