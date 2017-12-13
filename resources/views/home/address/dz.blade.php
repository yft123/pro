@extends('home.order')

@section('con')
@section('input')

@stop
<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/homes/css/core/dz.css">
<script type="text/javascript">
	window.onload=function(){
	var item_new=document.getElementById("item_new");
	var page_width=null;//页面宽度
	var page_height=null;//页面高度
	var item_new_div=document.getElementById("item_new_div");
	var item_new_info=item_new_div.firstElementChild || item_new_div.firstChild;
    var item_new_info_width=null;//登录框的宽度
    var item_new_info_height=null;//登录框的高度
    var cancel=document.getElementById("cancel");

	item_new.onclick=function(){
       page_width=window.innerWidth;
       page_height=window.innerHeight;
       item_new_div.style.width=page_width+"px";
       item_new_div.style.height=page_height+"px";
       item_new_div.style.display="block";
       item_new_info_width=item_new_info.offsetWidth;
       item_new_info_height=item_new_info.offsetHeight;
       item_new_info.style.left=(page_width-item_new_info_width)/2+"px";
       item_new_info.style.top=(page_height-item_new_info_height)/2+"px";
	}

	cancel.onclick=function(){
		item_new_info.parentNode.style.display="none";
	}
}
</script>
	<div class="ddzxbt">收获地址</div>
	<div class="box-bd">
	    <div class="user-address-list clearfix">
	        <div class="address-item address-item-new" id="item_new">
	            <i class="glyphicon glyphicon-plus-sign ico"></i>
	            添加新地址
	        </div>
	        <div id="item_new_div">
	        	<div class="item_new_info">
					<div class="modal-header">
		                <span class="title">添加收货地址</span>
		                <a class="close">
		                	<i class="glyphicon glyphicon-remove" id="cancel"></i>
		                </a>
	            	</div>
	            	<form action="/address" method="post">
		                  <div class="form-group">
		                    <label for="exampleInputEmail1">姓名</label>
		                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="" style="width: 610px;margin-left: 10px;">
		                  </div>
		                  <div class="form-group">
		                    <label for="exampleInputEmail1">收货地址</label>
		                    <div class="clearfix"></div>
		                    <div class='col-md-4'>
		                        <select name="province" id="" class="form-control " name="province">
		                            <option value="">请选择</option>
		                        </select>
		                    </div>
		                    <div class='col-md-4'>
		                        <select name="city" id="" class="form-control " name="city">
		                            <option value="">请选择</option>
		                        </select>
		                    </div>
		                    <div class='col-md-4'>
		                        <select name="xian" id="" class="form-control " name="xian">
		                            <option value="">请选择</option>
		                        </select>
		                    </div>
		                  </div>
		                  <div class="clearfix"></div>
		                  <div class="form-group">
		                    <label for="exampleInputEmail1">详细地址</label>
		                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="" style="width: 610px;height:60px;margin-left: 10px;">
		                  </div>
		                  <div class="form-group">
		                    <label for="exampleInputEmail1">手机号</label>
		                    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="" style="width: 610px;margin-left: 10px;">
		                  </div>
		                  <div class="checkbox" style="margin-left: 20px;">
		                    <label>
		                      <input type="checkbox" value="1" name="is_default"> 是否为默认收货地址
		                    </label>
		                  </div>
		                    {{csrf_field()}}
		                  <button type="submit" class="btn btn-default" style="margin-left: 20px;">添加</button>
                	</form>
	            </div>
	        </div>
	        <!-- <div class="address-item">
	            <dl>
	                <dt>
						<em class="uname">尹飞腾</em>
	                </dt>
	                <dd class="utel">150****9950</dd>
	                <dd class="uaddress">
	                	河北 衡水市 武强县                                        武强镇                                        
	                	<br>
	                	武强镇北牌村 (053300)
	            	</dd>
	            </dl>
	            <div class="actions">
	                <a class="modify">修改</a>
	                <a class="modify">删除</a>
	            </div>
	        </div> -->
	    </div>
	</div>
@stop

<script>
function init() {
    //
    $.ajax({
        type:'get',
        url: '/getarea',
        dataType:'json',
        data: {pid:0},
        success: function(data){
            for(var i=0;i<data.length;i++){
                var option = $('<option value="'+data[i].id+'">'+data[i].area_name+'</option>')
                //将option插入到省的select中
                $('select[name=province]').append(option);
            }
        }
    })
}
init();

$('select[name=province]').change(function(){
    $('select[name=city]').html('<option value="">请选择</option>')
    //获取当前省的id
    var id = $(this).val();
    //发送ajax获取当前省所对应的市的信息
    $.ajax({
        type:'get',
        url: '/getv',
        dataType:'json',
        data: {pid:id},
        success: function(data){
            for(var i=0;i<data.length;i++){
                var option = $('<option value="'+data[i].id+'">'+data[i].area_name+'</option>')
                //将option插入到省的select中
                $('select[name=city]').append(option);
            }
        }
    })
});

$('select[name=city]').change(function(){
    $('select[name=xian]').html('<option value="">请选择</option>')
    //获取当前省的id
    var id = $(this).val();
    //发送ajax获取当前省所对应的市的信息
    $.ajax({
        type:'get',
        url: '/getarea',
        dataType:'json',
        data: {pid:id},
        success: function(data){
            for(var i=0;i<data.length;i++){
                var option = $('<option value="'+data[i].id+'">'+data[i].area_name+'</option>')
                //将option插入到省的select中
                $('select[name=xian]').append(option);
            }
        }
    })
});

</script>