<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>电器商城</title>
	<link rel="shortcut icon" href="homes/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/homes/css/main.css">
	<script src="/homes/js/jquery-1.10.2.js"></script>
</head>
<body>
	<!-- 顶部导航条 -->
	<div class="topbar">
		<div class="container">
			<div class="topbar-nav">
					<a href="#">小米商城</a>
					<span class="ver">|</span>
					<a href="#">DAMI</a>
					<span class="ver">|</span>
					<a href="#">米聊</a>
					<span class="ver">|</span>
					<a href="#">游戏</a>
					<span class="ver">|</span>
					<a href="#">多看阅读</a>
					<span class="ver">|</span>
					<a href="#">云服务</a>
					<span class="ver">|</span>
					<a href="#">金融</a>
					<span class="ver">|</span>
					<a href="#">小米商城移动版</a>
					<span class="ver">|</span>
					<a href="#">问题反馈</a>
					<span class="ver">|</span>
					<a href="#">Select Refion</a>
			</div>
			<div class="topbar-cart">
				<a href="#"><i></i>购物车</a>
			</div>
			<div class="topbar-info">
				<a href="/home/login" class="link">登录</a>
					<span class="ver">|</span>
				<a href="home/registered" class="link">注册</a>
					<span class="ver">|</span>
				<a href="#" class="link">消息通知</a>
			</div>
		</div>
	</div>
	<!-- header区 -->
	<div class="header">
		<div class="container">
			<div class="header-logo">
				<a href="/home" class="logo"></a>
				<div class="advertising">
					<a href="#"></a>
				</div>
			</div>
			<div class="header-nav">
				<ul class="navlist clearfix">
					@section('all')
					<li class="all">
						<div class="side-nav">
							<ul class="sidenav-list">
								<li class="side-item"><a href="/home/lists">手机 电话卡<i class="iconfont">&#xe6a7;</i></a>
									<div class="children-nav">
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png" class="icon-80"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/xm5_80.png" class="icon-80"><span class="title">大米5X</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/max2_80.jpg" class="icon-80"><span class="title">大米Max2</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/5c_80.png" class="icon-80"><span class="title">大米手机5c</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/xmNOTE2_80.jpg" class="icon-80"><span class="title">大米 Note2</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/MIX_80.jpg" class="icon-80"><span class="title">大米MIX</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/xm5s_80.jpg"><span class="title">大米5s</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/xm5S-plus_80.jpg"><span class="title">大米5s Plus</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/hmn4x_80.png"><span class="title">红米Note 4X</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/hm4x_80.png"><span class="title">红米4X</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/hm4_80.jpg"><span class="title">红米4</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/4G+80.jpg"><span class="title">移动4G+专区</span></a></li> -->
										</ul>
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/compare.jpg" class="icon-80"><span class="title">对比手机</span></a></li>
											<li><a href="#" class="link"><img src="img/icon/mifenka-1.jpg"><span class="title">米粉卡 日租卡</span></a></li>
											<li><a href="#" class="link"><img src="img/icon/mimobile.jpg"><span class="title">大米移动 电话卡</span></a></li> -->
										</ul>
									</div>
								</li>
								<li class="side-item"><a href="#">笔记本 平板<i class="iconfont">&#xe6a7;</i></a>
									<div class="children-nav">
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
									</div>
								</li>
								<li class="side-item"><a href="#">电视 盒子<i class="iconfont">&#xe6a7;</i></a>
									<div class="children-nav">
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
									</div>
								</li>
								<li class="side-item"><a href="#">路由器 智能硬件<i class="iconfont">&#xe6a7;</i></a>
									<div class="children-nav">
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
									</div>
								</li>
								<li class="side-item"><a href="#">移动电源 电池 插线板<i class="iconfont">&#xe6a7;</i></a>
									<div class="children-nav">
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
									</div>
								</li>
								<li class="side-item"><a href="#">耳机 音箱<i class="iconfont">&#xe6a7;</i></a>
									<div class="children-nav">
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
									</div>
								</li>
								<li class="side-item"><a href="#">保护套 贴膜<i class="iconfont">&#xe6a7;</i></a>
									<div class="children-nav">
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
									</div>
								</li>
								<li class="side-item"><a href="#">线材 支架 存储卡<i class="iconfont">&#xe6a7;</i></a>
									<div class="children-nav">
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
									</div>
								</li>
								<li class="side-item"><a href="#">箱包 服饰 鞋 眼镜<i class="iconfont">&#xe6a7;</i></a>
									<div class="children-nav">
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
									</div>
								</li>
								<li class="side-item"><a href="#">米兔 生活周边<i class="iconfont">&#xe6a7;</i></a>
									<div class="children-nav">
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
										<ul class="children-list">
											<!-- <li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li>
											<li><a href="#" class="link"><img src="img/icon/holder_40.png"><span class="title">大米6</span></a><a href="#" class="buybtn">选购</a></li> -->
										</ul>
									</div>
								</li>
							</ul>
						</div>
					</li>
					@show
					@section('header-1')
					<li class="item"><a href="home/lists">小米手机</a></li>
					@show
					<li class="item"><a href="#">红米</a></li>
					<li class="item"><a href="#">笔记本</a></li>
					<li class="item"><a href="#">电视</a></li>
					<li class="item"><a href="#">盒子</a></li>
					<li class="item"><a href="#">新品</a></li>
					<li class="item"><a href="#">路由器</a></li>
					<li class="item"><a href="#">智能硬件</a></li>
					<li class="item"><a href="#">服务</a></li>
					<li class="item"><a href="#">社区</a></li>
				</ul>
			</div>
			<div class="header-search">
			<form action="" class="search-form">
				<input type="text" class="search-text">
				<input type="submit" class="search-btn iconfont" value="&#xe652;">
			</form>	
			</div>
		</div>
		<div class="main-nav">
			<div class="container">
				<ul class="mainnav-list clearfix">
					<li class="mainnav-item">
						<div class="product-thumb">
							<a href="#"><img src="https://c1.mifile.cn/f/i/g/2015/cn-index/xm6-320.png" width="160px"></a>
						</div>
						<div class="title">
							<a href="#">大米6</a>
						</div>
						<p class="price">2499元</p>
						<div class="product-label">
							<div class="goods-label">新品</div>
						</div>
					</li>
					<li class="mainnav-item">
						<div class="product-thumb">
							<a href="#"><img src="https://c1.mifile.cn/f/i/g/2015/cn-index/xm6-320.png" width="160px"></a>
						</div>
						<div class="title">
							<a href="#">大米6</a>
						</div>
						<p class="price">2499元</p>
						<div class="product-label">
							<div class="goods-label">新品</div>
						</div>
					</li>
					<li class="mainnav-item">
						<div class="product-thumb">
							<a href="#"><img src="https://c1.mifile.cn/f/i/g/2015/cn-index/xm6-320.png" width="160px"></a>
						</div>
						<div class="title">
							<a href="#">大米6</a>
						</div>
						<p class="price">2499元</p>
						<div class="product-label">
							<div class="goods-label">新品</div>
						</div>
					</li>
					<li class="mainnav-item">
						<div class="product-thumb">
							<a href="#"><img src="https://c1.mifile.cn/f/i/g/2015/cn-index/xm6-320.png" width="160px"></a>
						</div>
						<div class="title">
							<a href="#">大米6</a>
						</div>
						<p class="price">2499元</p>
						<div class="product-label">
							<div class="goods-label">新品</div>
						</div>
					</li>
					<li class="mainnav-item">
						<div class="product-thumb">
							<a href="#"><img src="https://c1.mifile.cn/f/i/g/2015/cn-index/xm6-320.png" width="160px"></a>
						</div>
						<div class="title">
							<a href="#">大米6</a>
						</div>
						<p class="price">2499元</p>
						<div class="product-label">
							<div class="goods-label">新品</div>
						</div>
					</li>
					<li class="mainnav-item">
						<div class="product-thumb">
							<a href="#"><img src="https://c1.mifile.cn/f/i/g/2015/cn-index/xm6-320.png" width="160px"></a>
						</div>
						<div class="title">
							<a href="#">大米6</a>
						</div>
						<p class="price">2499元</p>
						<div class="product-label">
							<div class="goods-label">新品</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	@section('content')
	@show