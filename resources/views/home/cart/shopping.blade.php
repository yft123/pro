<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>小米官网</title>
	<link rel="stylesheet" type="text/css" href="/homes/css/shopping.css">
	<script type="text/javascript" src="/homes/js/jquery-3.2.1.js"></script>
	<script type="text/javascript" src="/homes/js/shopping.js"></script>
	<script type="text/javascript">
		window.onload=function(){
		      var a=document.getElementById('box');
		      var box=document.getElementsByClassName("quanxuan");
		      var len=box.length;
		      var flag=true;
		      a.onclick=function(){
		        if(flag){
		               flag=false;
		                 for(var i=0;i<len;i++){
		                 box[i].checked=true;
		              }
		        }else{
	                flag=true;
	                for(var i=0;i<len;i++){
	                box[i].checked=false;
	              		}
		      		}
		    	}
    	}

    	$(function(){
    		 $('.del').click(function(){ 
	      //获取相关信息
		        var cid = $(this).attr('cid');
		        var dd = $(this).parents('.content2');
		        //发送请求
		        $.ajax({
		            type:'get',
		            url: '/cart/delete',
		            data: {'cid':cid},
		            success: function(data){
		                if(data == '1') {
		                    dd.fadeOut(1000,function(){
		                        alert('移出成功!!!');
		                    });
		                }
		            }
		        })
    		});
    	})

    	
	</script>
</head>
<body>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<div class="site-header">
	    <div class="container">
	        <div class="header-logo">
	            <a class="logo" href="javascript" title="小米官网"></a>
	        </div>
	        <div class="header-title">
	        	<h2>我的购物车</h2>
	        	<p>温馨提示：产品是否购买成功，以最终下单为准哦，请尽快结算</p>
	        </div>
	        <div class="topbar-info">
	        	<span class="user">
	        		<a rel="nofollow" class="user-name" href="javascript:;">
	        			<span class="name">userˇ</span>
	        		</a>
	        		<ul class="user-menu" style="">
	        			<li>
	        				<a rel="nofollow" href="javascript:;">个人中心</a>
	        			</li>
	        			<li>
	        				<a rel="nofollow" href="javascript:;">评价晒单</a>
	        			</li>
	        			<li>
	        				<a rel="nofollow" href="javascript:;">我的喜欢</a>
	        			</li>
	        			<li>
	        				<a rel="nofollow" href="javascript:;">小米账户</a>
	        			</li>
	        			<li>
	        				<a rel="nofollow" href="javascript:;">退出登录</a>
	        			</li>
	        		</ul>
	        	</span>
	        	<span class="sep">|</span>
	        	<a rel="nofollow" class="link link-order">我的订单</a>
	        </div>
	    </div>
	</div>
	<form action="/order/confirm" method="post">
		<div class="gwcxqbj">
			<div class="gwcxd center">
				<div class="top2 center">
					<div class="sub_top fl">
						<input type="checkbox" class="quanxuan" id="box" name="checkbox[]">全选
					</div>
					<div class="sub_top fl">商品名称</div>
					<div class="sub_top fl">单价</div>
					<div class="sub_top fl">数量</div>
					<div class="sub_top fl">小计</div>
					<div class="sub_top fr">操作</div>
					<div class="clear"></div>
				</div>
				@foreach ($goods as $k => $v)
				<div class="content2 center">
					<div class="sub_content fl ">
						<input type="checkbox" class="quanxuan goodsCheck" name="data[{{$v->id}}][id]" value="{{$v->goods_id}}">
					</div>
					<div class="sub_content fl"><img src="{{$v->d->fig}}" width="35" height="35"></div>
					<div class="sub_content fl ft20">{{$v->d->title}}</div>
					<div class="sub_content fl">{{$v->d->price}}</div>
					<div class="shop-arithmetic fl">
						<input type="text" name="data[{{$v->id}}][num]" class="num" value="1">
					</div>
					<div class="sub_content fl totle">{{$v->d->price}}</div>
					<div class="sub_content fl">
						<a href="" class="del" cid="{{$v->id}}">
							<i class="glyphicon glyphicon-remove"></i>
						</a>
					</div>
					<div class="clear"></div>
				</div>
				@endforeach
			</div>
			<div class="jiesuandan mt20 center">
				<div class="tishi fl ml20">
					<ul>
						<li><a href="/home/lists">继续购物</a></li>
					</ul>
				</div>
				{{csrf_field()}}
				<div class="jiesuan fr">
					<div class="jsanniu fr"><input class="jsan" type="submit" value="去结算"></div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</form>
@include('layouts.homes.footer')
<style type="text/css">
	.servise-item{
		width: 235px;
	}
	.footer-info .info-item{
		width: 150px;
	}	
</style>