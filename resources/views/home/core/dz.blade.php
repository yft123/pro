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