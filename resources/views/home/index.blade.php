@extends('home.home')
		@section('all')
		<li class="all">
			<div class="side-nav">
				<ul class="sidenav-list">
					@foreach($cat as $k => $v)
					<li class="side-item">
						<a href="/home/lists">{{$v->name}}<i class="iconfont">&#xe6a7;</i></a>
						<div class="children-nav">
						@foreach($v->goods as $c=>$b)
							<ul class="children-list">
								<li>
									<a href="/goods/{{$b->id}}" class="link">
										<img src="{{$b->fig}}" class="icon-80">
										<span class="title">{{$b->title}}</span>
									</a>
								</li>
								
							</ul>
							@endforeach
						</div>
					</li>
					@endforeach
				</ul>
			</div>
		</li>
		@endsection
	
	<!-- 页脚 -->

@section('content')
	<div class="carousel container">
		<div class="carousel-inner">
			@foreach ($jd as $k => $v)
				<img src="{{$v->img}}" class="first item " width="100%" height="100%">
			@endforeach
		</div>
		<div class="carousel-btn">
			<a href="javascript:" class="btn active"></a>
			<a href="javascript:" class="btn"></a>
			<a href="javascript:" class="btn"></a>
			<a href="javascript:" class="btn"></a>
			<a href="javascript:" class="btn"></a>
		</div>
		<a href="javascript:" class="prev"><i class="iconfont">&#xe697;</i></a>
		<a href="javascript:" class="next"><i class="iconfont">&#xe6a7;</i></a>
	</div>
	<!-- 小米功能区  -->
	<div class="home clearfix">
		<div class="container">
			<div class="features">
				<ul class="features-list clearfix">
					<li class="features-item"><a href="#"><i class="iconfont">&#xe6fd;</i>选购手机</a></li>
					<li class="features-item"><a href="#"><i class="iconfont">&#xe6fa;</i>企业团购</a></li>
					<li class="features-item"><a href="#"><i class="iconfont">&#xe6f7;</i>一元活动</a></li>
					<li class="features-item"><a href="#"><i class="iconfont">&#xe77c;</i>米粉卡</a></li>
					<li class="features-item"><a href="#"><i class="iconfont">&#xe6f2;</i>以旧换新</a></li>
					<li class="features-item"><a href="#"><i class="iconfont">&#xe6f5;</i>话费充值</a></li>
				</ul>
			</div>
			<div class="hot-promo">
				<ul class="promo-list clearfix">
					@foreach ($a as $k => $v)
						<li class="promo-item"><a href="#"><img src="{{$v->img}}" alt=""></a></li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
	<!-- 小米明星单品 -->
	<div class="single-goods">
		<div class="container">
			<div class="s-lg-title">
				<span class="page-title">小米明星单品</span>
				<div class="title-more">
					<a href="javascript:" class="s-prev btn-default"><i class="iconfont">&#xe697;</i></a>
					<a href="javascript:" class="s-next"><i class="iconfont">&#xe6a7;</i></a>
				</div>
			</div>
			<div class="sgoods-content">
				<ul class="sgoods-list clearfix" style="margin-left: 0; margin-left 0.5s ease">
					<li class="sgoods-item">
						<div class="sgoods-thumb">
							<a href=""><img src="/homes/img/icon/holder_110.png"></a>
						</div>
						<div class="goods-title">
							<a href="" class="title">产品1</a>
						</div>
						<p class="goods-info">4100mAh超长续航，多彩金属</p>
						<p class="goods-price">1440元</p>

					</li>
					<li class="sgoods-item">
						<div class="sgoods-thumb">
							<a href=""><img src="/homes/img/icon/holder_110.png"></a>
						</div>
						<div class="goods-title">
							<a href="" class="title">产品2</a>
						</div>
						<p class="goods-info">4100mAh超长续航，多彩金属</p>
						<p class="goods-price">1440元</p>
					</li><li class="sgoods-item">
						<div class="sgoods-thumb">
							<a href=""><img src="/homes/img/icon/holder_110.png"></a>
						</div>
						<div class="goods-title">
							<a href="" class="title">产品3</a>
						</div>
						<p class="goods-info">4100mAh超长续航，多彩金属</p>
						<p class="goods-price">1440元</p>
					</li><li class="sgoods-item">
						<div class="sgoods-thumb">
							<a href=""><img src="/homes/img/icon/holder_110.png"></a>
						</div>
						<div class="goods-title">
							<a href="" class="title">产品4</a>
						</div>
						<p class="goods-info">4100mAh超长续航，多彩金属</p>
						<p class="goods-price">1440元</p>
					</li><li class="sgoods-item">
						<div class="sgoods-thumb">
							<a href=""><img src="/homes/img/icon/holder_110.png"></a>
						</div>
						<div class="goods-title">
							<a href="" class="title">产品5</a>
						</div>
						<p class="goods-info">4100mAh超长续航，多彩金属</p>
						<p class="goods-price">1440元</p>
					</li><li class="sgoods-item">
						<div class="sgoods-thumb">
							<a href=""><img src="/homes/img/icon/holder_110.png"></a>
						</div>
						<div class="goods-title">
							<a href="" class="title">产品6</a>
						</div>
						<p class="goods-info">4100mAh超长续航，多彩金属</p>
						<p class="goods-price">1440元</p>
					</li><li class="sgoods-item">
						<div class="sgoods-thumb">
							<a href=""><img src="/homes/img/icon/holder_110.png"></a>
						</div>
						<div class="goods-title">
							<a href="" class="title">产品7</a>
						</div>
						<p class="goods-info">4100mAh超长续航，多彩金属</p>
						<p class="goods-price">1440元</p>
					</li><li class="sgoods-item">
						<div class="sgoods-thumb">
							<a href=""><img src="/homes/img/icon/holder_110.png"></a>
						</div>
						<div class="goods-title">
							<a href="" class="title">产品8</a>
						</div>
						<p class="goods-info">4100mAh超长续航，多彩金属</p>
						<p class="goods-price">1440元</p>
					</li><li class="sgoods-item">
						<div class="sgoods-thumb">
							<a href=""><img src="/homes/img/icon/holder_110.png"></a>
						</div>
						<div class="goods-title">
							<a href="" class="title">产品9</a>
						</div>
						<p class="goods-info">4100mAh超长续航，多彩金属</p>
						<p class="goods-price">1440元</p>
					</li><li class="sgoods-item">
						<div class="sgoods-thumb">
							<a href=""><img src="/homes/img/icon/holder_110.png"></a>
						</div>
						<div class="goods-title">
							<a href="" class="title">产品10</a>
						</div>
						<p class="goods-info">4100mAh超长续航，多彩金属</p>
						<p class="goods-price">1440元</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- 小米主要内容 -->
	<div class="page-main">
		<div class="container">
			<!-- 家电 -->
			<div class="home-ce clearfix">
				<div class="title">
					<span class="page-title">家电</span>
					<div class="more">
						<a href="javascript:" class="more-text active">热门</a>
						<a href="javascript:" class="more-text">电视影音</a>
						<a href="javascript:" class="more-text">电脑</a>
						<a href="javascript:" class="more-text">家居</a>
					</div>
				</div>
				<div class="col-md-4">
					<ul class="lg-thumb-list clearfix">
						<li class="goods-item left-s-thumb">
							<a href="" class="s-thumb"><img src="holder.js/233x615" alt=""></a>
						</li>
					</ul>
				</div>
				<div class="col-md-8">
					<ul class="goods-list list-active hot-list clearfix">
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门1</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
							<div class="product-label">
								<div class="goods-label">新品</div>
							</div>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门2</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门3</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门4</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门5</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门6</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门7</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门8</a>
							</div>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<a href="#" class="goods-more">浏览更多 <span>热门</span></a>
							<div class="goods-thumb">
								<a href=""><i class="iconfont">&#xe700;</i></a>
							</div>
						</li>
					</ul>
					<ul class="goods-list list tv-list clearfix">
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视1</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视2</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视3</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视4</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视5</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视6</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视7</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视8</a>
							</div>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<a href="#" class="goods-more">浏览更多 <span>热门</span></a>
							<div class="goods-thumb">
								<a href=""><i class="iconfont">&#xe700;</i></a>
							</div>
						</li>
					</ul>
					<ul class="goods-list list pc-list clearfix">
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑1</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑2</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑3</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑4</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑5</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑6</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑7</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑8</a>
							</div>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<a href="#" class="goods-more">浏览更多 <span>热门</span></a>
							<div class="goods-thumb">
								<a href=""><i class="iconfont">&#xe700;</i></a>
							</div>
						</li>
					</ul>
					<ul class="goods-list list home-list clearfix">
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居1</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居2</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居3</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居4</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居5</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居6</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居7</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居8</a>
							</div>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<a href="#" class="goods-more">浏览更多 <span>热门</span></a>
							<div class="goods-thumb">
								<a href=""><i class="iconfont">&#xe700;</i></a>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<!-- 智能设备 -->
			<div class="ide clearfix">
				<div class="title">
					<span class="page-title">智能</span>
					<div class="more">
						<a href="javascript:" class="more-text active">热门</a>
						<a href="javascript:" class="more-text">出行</a>
						<a href="javascript:" class="more-text">健康</a>
						<a href="javascript:" class="more-text">酷玩</a>
						<a href="javascript:" class="more-text">路由器</a>
					</div>
				</div>
				<div class="col-md-4">
					<ul class="left-thumb-list clearfix">
						<li class="goods-item left-m-thumb">
							<a href="#" class="m-thumb-link"><img src="holder.js/233x300" class="m-thumb"></a>
						</li>
						<li class="goods-item left-m-thumb">
							<a href="#" class="m-thumb-link"><img src="holder.js/233x300" class="m-thumb"></a>
						</li>
					</ul>
				</div>
				<div class="col-md-8">
					<ul class="goods-list list-active hot-list clearfix">
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门1</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门2</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门3</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门4</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门5</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门6</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门7</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门8</a>
							</div>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<a href="#" class="goods-more">浏览更多 <span>热门</span></a>
							<div class="goods-thumb">
								<a href=""><i class="iconfont">&#xe700;</i></a>
							</div>
						</li>
					</ul>
					<ul class="goods-list list hot-list clearfix">
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门1</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门2</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门3</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门4</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门5</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门6</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门7</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门8</a>
							</div>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<a href="#" class="goods-more">浏览更多 <span>热门</span></a>
							<div class="goods-thumb">
								<a href=""><i class="iconfont">&#xe700;</i></a>
							</div>
						</li>
					</ul>
					<ul class="goods-list list tv-list clearfix">
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视1</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视2</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视3</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视4</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视5</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视6</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视7</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视8</a>
							</div>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<a href="#" class="goods-more">浏览更多 <span>热门</span></a>
							<div class="goods-thumb">
								<a href=""><i class="iconfont">&#xe700;</i></a>
							</div>
						</li>
					</ul>
					<ul class="goods-list list pc-list clearfix">
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑1</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑2</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑3</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑4</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑5</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑6</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑7</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑8</a>
							</div>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<a href="#" class="goods-more">浏览更多 <span>热门</span></a>
							<div class="goods-thumb">
								<a href=""><i class="iconfont">&#xe700;</i></a>
							</div>
						</li>
					</ul>
					<ul class="goods-list list home-list clearfix">
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居1</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居2</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居3</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居4</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居5</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居6</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居7</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居8</a>
							</div>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<a href="#" class="goods-more">浏览更多 <span>热门</span></a>
							<div class="goods-thumb">
								<a href=""><i class="iconfont">&#xe700;</i></a>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<!-- 搭配 -->
			<div class="asst clearfix">
				<div class="title">
					<span class="page-title">搭配</span>
					<div class="more">
						<a href="javascript:" class="more-text active">热门</a>
						<a href="javascript:" class="more-text">耳机音箱</a>
						<a href="javascript:" class="more-text">电源</a>
						<a href="javascript:" class="more-text">电池存储卡</a>
					</div>
				</div>
				<div class="col-md-4">
					<ul class="lg-thumb-list clearfix">
						<li class="goods-item left-s-thumb">
							<a href="" class="s-thumb"><img src="holder.js/233x615" alt=""></a>
						</li>
					</ul>
				</div>
				<div class="col-md-8">
					<ul class="goods-list list-active hot-list clearfix">
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门1</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门2</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门3</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门4</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门5</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门6</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门7</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门8</a>
							</div>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<a href="#" class="goods-more">浏览更多 <span>热门</span></a>
							<div class="goods-thumb">
								<a href=""><i class="iconfont">&#xe700;</i></a>
							</div>
						</li>
					</ul>
					<ul class="goods-list list tv-list clearfix">
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视1</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视2</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视3</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视4</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视5</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视6</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视7</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视8</a>
							</div>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<a href="#" class="goods-more">浏览更多 <span>热门</span></a>
							<div class="goods-thumb">
								<a href=""><i class="iconfont">&#xe700;</i></a>
							</div>
						</li>
					</ul>
					<ul class="goods-list list pc-list clearfix">
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑1</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑2</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑3</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑4</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑5</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑6</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑7</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑8</a>
							</div>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<a href="#" class="goods-more">浏览更多 <span>热门</span></a>
							<div class="goods-thumb">
								<a href=""><i class="iconfont">&#xe700;</i></a>
							</div>
						</li>
					</ul>
					<ul class="goods-list list home-list clearfix">
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居1</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居2</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居3</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居4</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居5</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居6</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居7</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居8</a>
							</div>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<a href="#" class="goods-more">浏览更多 <span>热门</span></a>
							<div class="goods-thumb">
								<a href=""><i class="iconfont">&#xe700;</i></a>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<!-- 配件 -->
			<div class="parts clearfix">
				<div class="title">
					<span class="page-title">配件</span>
					<div class="more">
						<a href="javascript:" class="more-text active">热门</a>
						<a href="javascript:" class="more-text">保护套</a>
						<a href="javascript:" class="more-text">贴膜</a>
						<a href="javascript:" class="more-text">其他配件</a>
					</div>
				</div>
				<div class="col-md-4">
					<ul class="left-thumb-list clearfix">
						<li class="goods-item left-m-thumb">
							<a href="#" class="m-thumb-link"><img src="holder.js/233x300" class="m-thumb"></a>
						</li>
						<li class="goods-item left-m-thumb">
							<a href="#" class="m-thumb-link"><img src="holder.js/233x300" class="m-thumb"></a>
						</li>
					</ul>
				</div>
				<div class="col-md-8">
					<ul class="goods-list list-active hot-list clearfix">
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门1</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门2</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门3</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门4</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门5</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门6</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门7</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门8</a>
							</div>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<a href="#" class="goods-more">浏览更多 <span>热门</span></a>
							<div class="goods-thumb">
								<a href=""><i class="iconfont">&#xe700;</i></a>
							</div>
						</li>
					</ul>
					<ul class="goods-list list tv-list clearfix">
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视1</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视2</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视3</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视4</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视5</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视6</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视7</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视8</a>
							</div>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<a href="#" class="goods-more">浏览更多 <span>热门</span></a>
							<div class="goods-thumb">
								<a href=""><i class="iconfont">&#xe700;</i></a>
							</div>
						</li>
					</ul>
					<ul class="goods-list list pc-list clearfix">
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑1</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑2</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑3</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑4</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑5</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑6</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑7</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑8</a>
							</div>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<a href="#" class="goods-more">浏览更多 <span>热门</span></a>
							<div class="goods-thumb">
								<a href=""><i class="iconfont">&#xe700;</i></a>
							</div>
						</li>
					</ul>
					<ul class="goods-list list home-list clearfix">
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居1</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居2</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居3</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居4</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居5</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居6</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居7</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居8</a>
							</div>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<a href="#" class="goods-more">浏览更多 <span>热门</span></a>
							<div class="goods-thumb">
								<a href=""><i class="iconfont">&#xe700;</i></a>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<!-- 周边 -->
			<div class="pia clearfix">
				<div class="title">
					<span class="page-title">周边</span>
					<div class="more">
						<a href="javascript:" class="more-text active">热门</a>
						<a href="javascript:" class="more-text">服装</a>
						<a href="javascript:" class="more-text">米兔</a>
						<a href="javascript:" class="more-text">生活周边</a>
						<a href="javascript:" class="more-text">箱包</a>
					</div>
				</div>
				<div class="col-md-4">
					<ul class="left-thumb-list clearfix">
						<li class="goods-item left-m-thumb">
							<a href="#" class="m-thumb-link"><img src="holder.js/233x300" class="m-thumb"></a>
						</li>
						<li class="goods-item left-m-thumb">
							<a href="#" class="m-thumb-link"><img src="holder.js/233x300" class="m-thumb"></a>
						</li>
					</ul>
				</div>
				<div class="col-md-8">
					<ul class="goods-list list-active hot-list clearfix">
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门1</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门2</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门3</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门4</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门5</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门6</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门7</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">热门8</a>
							</div>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<a href="#" class="goods-more">浏览更多 <span>热门</span></a>
							<div class="goods-thumb">
								<a href=""><i class="iconfont">&#xe700;</i></a>
							</div>
						</li>
					</ul>
					<ul class="goods-list list tv-list clearfix">
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视1</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视2</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视3</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视4</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视5</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视6</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视7</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视8</a>
							</div>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<a href="#" class="goods-more">浏览更多 <span>热门</span></a>
							<div class="goods-thumb">
								<a href=""><i class="iconfont">&#xe700;</i></a>
							</div>
						</li>
					</ul>
					<ul class="goods-list list tv-list clearfix">
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视1</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视2</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视3</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视4</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视5</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视6</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视7</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电视8</a>
							</div>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<a href="#" class="goods-more">浏览更多 <span>热门</span></a>
							<div class="goods-thumb">
								<a href=""><i class="iconfont">&#xe700;</i></a>
							</div>
						</li>
					</ul>
					<ul class="goods-list list pc-list clearfix">
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑1</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑2</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑3</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑4</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑5</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑6</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑7</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">电脑8</a>
							</div>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<a href="#" class="goods-more">浏览更多 <span>热门</span></a>
							<div class="goods-thumb">
								<a href=""><i class="iconfont">&#xe700;</i></a>
							</div>
						</li>
					</ul>
					<ul class="goods-list list home-list clearfix">
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居1</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居2</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居3</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居4</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居5</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居6</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居7</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">家居8</a>
							</div>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-s">
							<a href="#" class="goods-more">浏览更多 <span>热门</span></a>
							<div class="goods-thumb">
								<a href=""><i class="iconfont">&#xe700;</i></a>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<!-- 推荐 -->
			<div class="reco-goods">
				<div class="s-lg-title">
					<span class="page-title">为你推荐</span>
					<div class="title-more">
						<a href="javascript:" class="reco-prev btn-default"><i class="iconfont">&#xe697;</i></a>
						<a href="javascript:" class="reco-next"><i class="iconfont">&#xe6a7;</i></a>
					</div>
				</div>
				<div class="col-md-12">
					<ul class="reco-list clearfix">
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">推荐1</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">推荐2</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#" class="title"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">推荐3</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">推荐4</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">推荐5</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">推荐6</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">推荐7</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">推荐7</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">推荐7</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="/homes/img/icon/holder_110.png"></a>
							</div>
							<div class="goods-title">
								<a href="#" class="title">推荐7</a>
							</div>
							<p class="goods-info">超长续航，多彩金属</p>
							<p class="goods-price">1440元</p>
						</li>
					</ul>
				</div>
			</div>
			<!-- 热评产品 -->
			<div class="hot-review">
				<div class="title">
					<span class="page-title">热评产品</span>
				</div>
				<div class="col-md-12 ">
					<ul class="hotrew-list clearfix">
						<li class="goods-item goods-item-h">
							<div class="hotrew-thumb">
								<a href=""><img src="holder.js/295x220" alt=""></a>
							</div>
							<div class="review">
								<a href="" class="review-text">这箱子很好，外观漂亮，实用性强。很轻，有点软但不影响它的坚固。</a>
							</div>
							<p class="form-user">来自于 <span class="user-name">子书雁</span> 的评价</p>
							<div class="title">
								<a href="" class="goods-title">产品名称1</a>
								<span class="ver">|</span>
								<span class="goods-price">111元</span>
							</div>
						</li>
						<li class="goods-item goods-item-h">
							<div class="hotrew-thumb">
								<a href=""><img src="holder.js/295x220" alt=""></a>
							</div>
							<div class="review">
								<a href="" class="review-text">这箱子很好，外观漂亮，实用性强。很轻，有点软但不影响它的坚固。</a>
							</div>
							<p class="form-user">来自于 <span class="user-name">子书雁</span> 的评价</p>
							<div class="title">
								<a href="" class="goods-title">产品名称2</a>
								<span class="ver">|</span>
								<span class="goods-price">111元</span>
							</div>
						</li>
						<li class="goods-item goods-item-h">
							<div class="hotrew-thumb">
								<a href=""><img src="holder.js/295x220" alt=""></a>
							</div>
							<div class="review">
								<a href="" class="review-text">这箱子很好，外观漂亮，实用性强。很轻，有点软但不影响它的坚固。</a>
							</div>
							<p class="form-user">来自于 <span class="user-name">子书雁</span> 的评价</p>
							<div class="title">
								<a href="" class="goods-title">产品名称3</a>
								<span class="ver">|</span>
								<span class="goods-price">111元</span>
							</div>
						</li>
						<li class="goods-item goods-item-h">
							<div class="hotrew-thumb">
								<a href=""><img src="holder.js/295x220" alt=""></a>
							</div>
							<div class="review">
								<a href="" class="review-text">这箱子很好，外观漂亮，实用性强。很轻，有点软但不影响它的坚固。这箱子很好，外观漂亮，实用性强。很轻，有点软但不影响它的坚固。</a>
							</div>
							<p class="form-user">来自于 <span class="user-name">子书雁</span> 的评价</p>
							<div class="title">
								<a href="" class="goods-title">产品名称4</a>
								<span class="ver">|</span>
								<span class="goods-price">111元</span>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<!-- 内容 -->
			<div class="other-content">
				<div class="title">
					<span class="page-title">内容</span>
				</div>
				<div class="col-md-12 ">
					<ul class="content-list clearfix">
						<li class="goods-item other-item other-photo">
							<p class="title">图书</p>
							<ul class="other-silde clearfix">
								<li>
									<a href="" class="name">标题1</a>
									<a href="" class="des">畅销作家大冰2016年新书！讲给你听，好吗好的！</a>
									<a href="" class="goods-price">免费</a>
									<div class="other-thumb">
										<a href=""><img src="/homes/img/icon/holder_110.png" alt=""></a>
									</div>
								</li>
								<li>
									<a href="" class="name">标题2</a>
									<a href="" class="des">畅销作家大冰2016年新书！讲给你听，好吗好的！</a>
									<a href="" class="goods-price">免费</a>
									<div class="other-thumb">
										<a href=""><img src="/homes/img/icon/holder_110.png" alt=""></a>
									</div>
								</li>
								<li>
									<a href="" class="name">标题3</a>
									<a href="" class="des">畅销作家大冰2016年新书！讲给你听，好吗好的！</a>
									<a href="" class="goods-price">免费</a>
									<div class="other-thumb">
										<a href=""><img src="/homes/img/icon/holder_110.png" alt=""></a>
									</div>
								</li>
								<div class="other-btn">
								<a href="javascript:" class="btn active" data-num="1"></a>
								<a href="javascript:" class="btn" data-num="2"></a>
								<a href="javascript:" class="btn" data-num="3"></a>
								</div>
								<div class="other-nav">
									<a href="javascript:" class="o-prev btn-default"><i class="iconfont">&#xe697;</i></a>
									<a href="javascript:" class="o-next"><i class="iconfont">&#xe6a7;</i></a>
								</div>
							</ul>
						</li>
						<li class="goods-item other-item other-theme">
							<p class="title">图书</p>
							<ul class="other-silde clearfix">
								<li>
									<a href="" class="name">标题1</a>
									<a href="" class="des">畅销作家大冰2016年新书！讲给你听，好吗好的！</a>
									<a href="" class="goods-price">免费</a>
									<div class="other-thumb">
										<a href=""><img src="/homes/img/icon/holder_110.png" alt=""></a>
									</div>
								</li>
								<li>
									<a href="" class="name">标题2</a>
									<a href="" class="des">畅销作家大冰2016年新书！讲给你听，好吗好的！</a>
									<a href="" class="goods-price">免费</a>
									<div class="other-thumb">
										<a href=""><img src="/homes/img/icon/holder_110.png" alt=""></a>
									</div>
								</li>
								<li>
									<a href="" class="name">标题3</a>
									<a href="" class="des">畅销作家大冰2016年新书！讲给你听，好吗好的！</a>
									<a href="" class="goods-price">免费</a>
									<div class="other-thumb">
										<a href=""><img src="/homes/img/icon/holder_110.png" alt=""></a>
									</div>
								</li>
								<div class="other-btn">
								<a href="javascript:" class="btn active" data-num="1"></a>
								<a href="javascript:" class="btn" data-num="2"></a>
								<a href="javascript:" class="btn" data-num="3"></a>
								</div>
								<div class="other-nav">
									<a href="javascript:" class="o-prev btn-default"><i class="iconfont">&#xe697;</i></a>
									<a href="javascript:" class="o-next"><i class="iconfont">&#xe6a7;</i></a>
								</div>
							</ul>
						</li>
						<li class="goods-item other-item other-game">
							<p class="title">图书</p>
							<ul class="other-silde clearfix">
								<li>
									<a href="" class="name">标题1</a>
									<a href="" class="des">畅销作家大冰2016年新书！讲给你听，好吗好的！</a>
									<a href="" class="goods-price">免费</a>
									<div class="other-thumb">
										<a href=""><img src="/homes/img/icon/holder_110.png" alt=""></a>
									</div>
								</li>
								<li>
									<a href="" class="name">标题2</a>
									<a href="" class="des">畅销作家大冰2016年新书！讲给你听，好吗好的！</a>
									<a href="" class="goods-price">免费</a>
									<div class="other-thumb">
										<a href=""><img src="/homes/img/icon/holder_110.png" alt=""></a>
									</div>
								</li>
								<li>
									<a href="" class="name">标题3</a>
									<a href="" class="des">畅销作家大冰2016年新书！讲给你听，好吗好的！</a>
									<a href="" class="goods-price">免费</a>
									<div class="other-thumb">
										<a href=""><img src="/homes/img/icon/holder_110.png" alt=""></a>
									</div>
								</li>
								<div class="other-btn">
								<a href="javascript:" class="btn active" data-num="1"></a>
								<a href="javascript:" class="btn" data-num="2"></a>
								<a href="javascript:" class="btn" data-num="3"></a>
								</div>
								<div class="other-nav">
									<a href="javascript:" class="o-prev btn-default"><i class="iconfont">&#xe697;</i></a>
									<a href="javascript:" class="o-next"><i class="iconfont">&#xe6a7;</i></a>
								</div>
							</ul>
						</li>
						<li class="goods-item other-item other-app">
							<p class="title">图书</p>
							<ul class="other-silde clearfix">
								<li>
									<a href="" class="name">标题1</a>
									<a href="" class="des">畅销作家大冰2016年新书！讲给你听，好吗好的！</a>
									<a href="" class="goods-price">免费</a>
									<div class="other-thumb">
										<a href=""><img src="/homes/img/icon/holder_110.png" alt=""></a>
									</div>
								</li>
								<li>
									<a href="" class="name">标题2</a>
									<a href="" class="des">畅销作家大冰2016年新书！讲给你听，好吗好的！</a>
									<a href="" class="goods-price">免费</a>
									<div class="other-thumb">
										<a href=""><img src="/homes/img/icon/holder_110.png" alt=""></a>
									</div>
								</li>
								<li>
									<a href="" class="name">标题3</a>
									<a href="" class="des">畅销作家大冰2016年新书！讲给你听，好吗好的！</a>
									<a href="" class="goods-price">免费</a>
									<div class="other-thumb">
										<a href=""><img src="/homes/img/icon/holder_110.png" alt=""></a>
									</div>
								</li>
								<div class="other-btn">
									<a href="javascript:" class="btn active"  data-num="1"></a>
									<a href="javascript:" class="btn"  data-num="2"></a>
									<a href="javascript:" class="btn"  data-num="3"></a>
								</div>
								<div class="other-nav">
									<a href="javascript:" class="o-prev btn-default"><i class="iconfont">&#xe697;</i></a>
									<a href="javascript:" class="o-next"><i class="iconfont">&#xe6a7;</i></a>
								</div>
							</ul>
						</li>

					</ul>
				</div>
			</div>
			<div class="goods-video">
				<div class="video-lg-title">
					<span class="page-title">视频</span>
					<a href="" class="tv-all">查看全部<i class="iconfont">&#xe6a7;</i></a>
				</div>
				<div class="col-md-12 ">
					<ul class="video-list clearfix">
						<li class="goods-item video-item-v">
							<div class="video-thumb" title="点击播放视频">
								<a href=""><img src="holder.js/295x180?bg=000" alt=""></a>
								<a href="" class="play-btn"><i class="iconfont">&#xe692;</i></a>
							</div>
							<div class="video-title">
								<a href="" class="video-title-t">听雷总讲述小米7年工艺探索之路</a>
							</div>
							<p class="des">小米6，7年工艺探索的巅峰之作</p>
						</li>
						<li class="goods-item video-item-v">
							<div class="video-thumb" title="点击播放视频">
								<a href=""><img src="holder.js/295x180?bg=000" alt=""></a>
								<a href="" class="play-btn"><i class="iconfont">&#xe692;</i></a>
							</div>
							<div class="video-title">
								<a href="" class="video-title-t">听雷总讲述小米7年工艺探索之路</a>
							</div>
							<p class="des">小米6，7年工艺探索的巅峰之作</p>
						</li>
						<li class="goods-item video-item-v">
							<div class="video-thumb" title="点击播放视频">
								<a href=""><img src="holder.js/295x180?bg=000" alt=""></a>
								<a href="" class="play-btn"><i class="iconfont">&#xe692;</i></a>
							</div>
							<div class="video-title">
								<a href="" class="video-title-t">听雷总讲述小米7年工艺探索之路</a>
							</div>
							<p class="des">小米6，7年工艺探索的巅峰之作</p>
						</li>
						<li class="goods-item video-item-v">
							<div class="video-thumb" title="点击播放视频">
								<a href=""><img src="holder.js/295x180?bg=000" alt=""></a>
								<a href="" class="play-btn"><i class="iconfont">&#xe692;</i></a>
							</div>
							<div class="video-title">
								<a href="" class="video-title-t">听雷总讲述小米7年工艺探索之路</a>
							</div>
							<p class="des">小米6，7年工艺探索的巅峰之作</p>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
	@endsection