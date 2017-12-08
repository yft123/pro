@extends('home.home')
@section('all')

@endsection
@section('title')
	<li class="item" style="margin-left: 200px;"><a href="#">小米手机</a></li>
@endsection
@section('content')
<link rel="stylesheet" type="text/css" href="/homes/css/order.css">
	<div class="grzxbj">
		<div class="selfinfo center">
			<div class="lfnav fl" style="margin-top: 20px;">
				<div class="ddzx">订单中心</div>
				<div class="subddzx">
					<ul>
						<li><a href="/home/order" style="color:#ff6700;font-weight:bold;">我的订单</a></li>
						<li><a href="">意外保</a></li>
						<li><a href="">团购订单</a></li>
						<li><a href="">评价晒单</a></li>
						<li><a href="">话费充值订单</a></li>
						<li><a href="">以旧换新订单</a></li>
					</ul>
				</div>
				<div class="ddzx">个人中心</div>
				<div class="subddzx">
					<ul>
						<li><a href="/core/create">我的个人中心</a></li>
						<li><a href="">消息通知</a></li>
						<li><a href="">购买资格</a></li>
						<li><a href="">现金账户</a></li>
						<li><a href="">小米礼品卡</a></li>
						<li><a href="">现金券</a></li>
						<li><a href="">喜欢的商品</a></li>
						<li><a href="">优惠券</a></li>
						<li><a href="/home/dz">收货地址</a></li>
					</ul>
				</div>
				<div class="ddzx">售后服务</div>
				<div class="subddzx">
					<ul>
						<li><a href="./self_info.html">服务记录</a></li>
						<li><a href="">申请服务</a></li>
						<li><a href="">领取快递报销</a></li>
					</ul>
				</div>
				<div class="ddzx">账户管理</div>
				<div class="subddzx">
					<ul>
						<li><a href="./self_info.html">个人信息</a></li>
						<li><a href="">修改密码</a></li>
						<li><a href="">社会VIP认证</a></li>
					</ul>
				</div>
			</div>
			<div class="rtcont fr">
				@section('con')
				<div class="ddzxbt">交易订单</div>
				@show
			</div>
		</div>
	</div>
@endsection