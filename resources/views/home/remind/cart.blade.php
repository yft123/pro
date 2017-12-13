@extends('home.home')
@section('all')

@endsection
@section('title')
	<li class="item" style="margin-left: 200px;"><a href="#">小米手机</a></li>
@endsection
@section('content')
<link rel="stylesheet" type="text/css" href="/homes/css/cart.css">
<div class="content">
	<div class="container">
		<div class="buy-succ-box">
		    <div class="goods-content"> 
		    	<div class="goods-img"> 
		    		<img src="/homes/img/cart/success.png" width="64" height="64"> 
		    	</div> 
		    	<div class="goods-info"> 
		    		<h3>已成功加入购物车！</h3>
		    		<span class="name">{{$goods->title}}</span> 
		    	</div>
		    </div>

		    <div class="actions">
		        <a href="/goods/{{$goods->id}}" class="btn btn-line-gray" id="b1">返回上一级</a>
		        <a href="/cart" class="btn btn-primary">去购物车结算</a>
		    </div>
		</div>
	</div>
</div>
@endsection