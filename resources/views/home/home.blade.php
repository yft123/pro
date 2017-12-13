<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>小米商城</title>
	<link rel="shortcut icon" href="homes/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/homes/css/main.css">
	<script src="/homes/js/jquery-1.10.2.js"></script>
	<!-- <script type="text/javascript" src="/homes/js/holder.js"></script> -->
</head>
<body>
	<!-- 顶部导航条 -->
	@section('nav')
	<div class="topbar">
		<div class="container">
			<div class="topbar-nav">
					<a href="/home">小米商城</a>
					<span class="ver">|</span>
					<a href="#">MIMI</a>
					<span class="ver">|</span>
					<a href="#">loT</a>
					<span class="ver">|</span>
					<a href="#">云服务</a>
					<span class="ver">|</span>
					<a href="#">水滴</a>
					<span class="ver">|</span>
					<a href="#">金融</a>
					<span class="ver">|</span>
					<a href="#">有品</a>
					<span class="ver">|</span>
					<a href="#">Select Refion</a>
			</div>
			<div class="topbar-cart">
				<a href="/cart"><i></i>购物车</a>
			</div>
			<div class="topbar-info">
				<a href="/home/login" class="link">登录</a>
					<span class="ver">|</span>
				<a href="/home/registered" class="link">注册</a>
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
					
					@show
					@section('title')
					<li class="item" style="margin-left: 15px;"><a href="#">小米手机</a></li>
					@show
					<li class="item"><a href="#">红米</a></li>
					<li class="item"><a href="#">平板·笔记本</a></li>
					<li class="item"><a href="#">电视</a></li>
					<li class="item"><a href="#">盒子·影音</a></li>
					<li class="item"><a href="#">路由器</a></li>
					<li class="item"><a href="#">智能硬件</a></li>
					<li class="item"><a href="#">服务</a></li>
					<li class="item"><a href="#">社区</a></li>

				</ul>
			</div>
			@section('input')
			<div class="header-search">
			<form action="" class="search-form">
				<input type="text" class="search-text">
				<input type="submit" class="search-btn iconfont" value="&#xe652;">
			</form>	
			</div>
			@show
		</div>
		<div class="main-nav">
			<div class="container">
				<ul class="mainnav-list clearfix">
					<li class="mainnav-item">
						<div class="product-thumb">
							<a href="#"><img src="/homes/img/xm6-320.png" width="160px"></a>
						</div>
						<div class="title">
							<a href="#">小米6</a>
						</div>
						<p class="price">2499元</p>
						<div class="product-label">
							<div class="goods-label">新品</div>
						</div>
					</li>
					<li class="mainnav-item">
						<div class="product-thumb">
							<a href="#"><img src="/homes/img/xm6-320.png" width="160px"></a>
						</div>
						<div class="title">
							<a href="#">小米6</a>
						</div>
						<p class="price">2499元</p>
						<div class="product-label">
							<div class="goods-label">新品</div>
						</div>
					</li>
					<li class="mainnav-item">
						<div class="product-thumb">
							<a href="#"><img src="/homes/img/xm6-320.png" width="160px"></a>
						</div>
						<div class="title">
							<a href="#">小米6</a>
						</div>
						<p class="price">2499元</p>
						<div class="product-label">
							<div class="goods-label">新品</div>
						</div>
					</li>
					<li class="mainnav-item">
						<div class="product-thumb">
							<a href="#"><img src="/homes/img/xm6-320.png" width="160px"></a>
						</div>
						<div class="title">
							<a href="#">小米6</a>
						</div>
						<p class="price">2499元</p>
						<div class="product-label">
							<div class="goods-label">新品</div>
						</div>
					</li>
					<li class="mainnav-item">
						<div class="product-thumb">
							<a href="#"><img src="/homes/img/xm6-320.png" width="160px"></a>
						</div>
						<div class="title">
							<a href="#">小米6</a>
						</div>
						<p class="price">2499元</p>
						<div class="product-label">
							<div class="goods-label">新品</div>
						</div>
					</li>
					<li class="mainnav-item">
						<div class="product-thumb">
							<a href="#"><img src="/homes/img/xm6-320.png" width="160px"></a>
						</div>
						<div class="title">
							<a href="#">小米6</a>
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
	@show
	<!-- 幻灯片区 -->
	@section('content')

	@show
	<!-- 页脚 -->
	<div class="footer">
	<div class="container">
		<div class="footer-servise">
			<ul class="servise-list clearfix">
				<li class="servise-item" id="item">
					<a href=""><i class="iconfont">&#xe712;</i>预约维修服务</a>
				</li>
				<li class="servise-item" id="item">
					<a href=""><i class="iconfont">&#xe70d;</i>七天无理由退货</a>
				</li>
				<li class="servise-item" id="item">
					<a href=""><i class="iconfont">&#xe706;</i>15天免费换货</a>
				</li>
				<li class="servise-item" id="item">
					<a href=""><i class="iconfont">&#xe6f1;</i>满150元包邮</a>
				</li>
				<li class="servise-item" id="item">
					<a href=""><i class="iconfont">&#xe709;</i>520余家售后网点</a>
				</li>
			</ul>
		</div>
		<div class="footer-info clearfix">
			<div class="more-info">
				<ul class="info-list clearfix">
					<li class="info-item" id="info-item">
						<p class="info-title">帮助中心</p>
						<p class="c1"><a href="">账户中心</a></p>
						<p class="c1"><a href="">购物指南</a></p>
						<p class="c1"><a href="">订单操作</a></p>
					</li>
					<li class="info-item" id="info-item">
						<p class="info-title">服务支持</p>
						<p class="c1"><a href="">售后政策</a></p>
						<p class="c1"><a href="">自助服务</a></p>
						<p class="c1"><a href="">相关下载</a></p>
					</li>
					<li class="info-item" id="info-item">
						<p class="info-title">线下门店</p>
						<p class="c1"><a href="">小米之家</a></p>
						<p class="c1"><a href="">服务网点</a></p>
						<p class="c1"><a href="">零售网点</a></p>
					</li>
					<li class="info-item" id="info-item">
						<p class="info-title">关于小米</p>
						<p class="c1"><a href="">了解小米</a></p>
						<p class="c1"><a href="">加入小米</a></p>
						<p class="c1"><a href="">联系我们</a></p>
					</li>
					<li class="info-item" id="info-item">
						<p class="info-title">关注我们</p>
						<p class="c1"><a href="">新浪微博</a></p>
						<p class="c1"><a href="">小米部落</a></p>
						<p class="c1"><a href="">官方微信</a></p>
					</li>
					<li class="info-item" id="info-item">
						<p class="info-title">特色服务</p>
						<p class="c1"><a href="">F 码通道</a></p>
						<p class="c1"><a href="">礼物码</a></p>
						<p class="c1"><a href="">防伪查询</a></p>
					</li>
				</ul>
			</div>
			<div class="cm-info">
				<p class="phone">400-100-5678</p>
				<p class="time">周一至周日 8:00-18:00<br />（仅收市话费）</p>
				<a href="" class="online">
					<i class="iconfont">&#xe720;</i>24小时在线客服
				</a>
			</div>
		</div>
	</div>
</div>
<div class="site-info">
    <div class="container">
        <div class="logo ir">小米官网</div>
        <div class="info-text">
            <p class="sites">
            	<a href="#">小米商城</a>
            	<span class="sep">|</span>
            	<a href="#">MIUI</a>
            	<span class="sep">|</span>
            	<a href="#">米家</a>
            	<span class="sep">|</span>
            	<a href="#">米聊</a>
            	<span class="sep">|</span>
            	<a href="#">多看</a>
            	<span class="sep">|</span>
            	<a href="#">路由器</a>
            	<span class="sep">|</span>
            	<a href="#">米粉卡</a>
            	<span class="sep">|</span>
            	<a href="#">小米天猫店</a>
            	<span class="sep">|</span>
            	<a href="#">隐私政策</a>
            	<span class="sep">|</span>
            	<a href="#">问题反馈</a>
            	<span class="sep">|</span>
            	<a href="#">Select Region</a>            
            </p>
            <p>
            	©<a href="#">mi.com</a> 京ICP证110507号 
            	<a href="#">京ICP备10046444号</a> 
            	<a href="#">京公网安备11010802020134号 </a>
            	<a href="#">京网文[2014]0059-0009号</a><br> 
            	违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试
            </p>
        </div>
        <div class="info-links">
            <a href="#">
            	<img rel="nofollow" src="/homes/img/login/truste.png" alt="TRUSTe Privacy Certification">
            </a>
            <a>
            	<img rel="nofollow" src="/homes/img/login/v-logo-2.png" alt="诚信网站">
            </a>
            <a href="#">
            	<img rel="nofollow" src="/homes/img/login/v-logo-1.png" alt="可信网站">
            </a>
            <a href="#">
            	<img rel="nofollow" src="/homes/img/login/v-logo-3.png" alt="网上交易保障中心">
            </a>
            <a href="#">
            	<img rel="nofollow" src="/homes/img/login/cx.png" alt="诚信经营 放心消费">
            </a>
        </div>
    </div>
</div>
</body>
<script src="/homes/js/main.js"></script>
<script src="/homes/js/holder.min.js"></script>

<link rel="stylesheet" type="text/css" href="/homes/css/site-info.css">
</html>