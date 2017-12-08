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
		      var box=document.getElementsByName("checkbox");
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
	</script>
</head>
<body>
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
	<div class="gwcxqbj">
		<div class="gwcxd center">
			<div class="top2 center">
				<div class="sub_top fl">
					<input type="checkbox" class="quanxuan" id="box" name="checkbox">全选
				</div>
				<div class="sub_top fl">商品名称</div>
				<div class="sub_top fl">单价</div>
				<div class="sub_top fl">数量</div>
				<div class="sub_top fl">小计</div>
				<div class="sub_top fr">操作</div>
				<div class="clear"></div>
			</div>
			<div class="content2 center">
				<div class="sub_content fl ">
					<input type="checkbox" class="quanxuan goodsCheck" name="checkbox">
				</div>
				<div class="sub_content fl"><img src="/homes/img/5c_80.png"></div>
				<div class="sub_content fl ft20">小米6全网通6GB内存+64GB 亮黑色</div>
				<div class="sub_content fl ">2499元</div>
				<div class="shop-arithmetic fl">
					<a href="javascript:;" class="minus">-</a>
					<span class="num">1</span>
					<a href="javascript:;" class="plus">+</a>
				</div>
				<div class="sub_content fl">2499元</div>
				<div class="sub_content fl"><a href="">×</a></div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="jiesuandan mt20 center">
			<div class="tishi fl ml20">
				<ul>
					<li><a href="/home/lists">继续购物</a></li>
					<!-- <li>|</li>
					<li>共<span>2</span>件商品，已选择<span>1</span>件</li>
					<div class="clear"></div> -->
				</ul>
			</div>
			<div class="jiesuan fr">
				<div class="jiesuanjiage fl">合计（不含运费）：<span>2499.00元</span></div>
				<div class="jsanniu fr"><input class="jsan" type="submit" name="checkbox" value="去结算"></div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	
@include('layouts.homes.footer')