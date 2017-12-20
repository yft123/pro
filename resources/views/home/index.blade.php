@extends('home.home')
		@section('all')
		<li class="all">
			<div class="side-nav">
				<ul class="sidenav-list">
					@foreach($cat as $k => $v)
					<li class="side-item">
						<a href="/goods/lists">{{$v->name}}<i class="iconfont">&#xe6a7;</i></a>
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
					@foreach ($stars as $k => $v)
						<li class="sgoods-item">
							<div class="sgoods-thumb">
								<a href="/goods/{{$v->id}}"><img src="{{$v->fig}}"></a>
							</div>
							<div class="goods-title" style="margin-top: 10px;">
								<a href="" class="title" style="font-size: 12px;">{{$v->title}}</a>
							</div>
							<p class="goods-info" style="line-height: 30px;font-size: 13px;color: #b0b0b0;">{{$v->con}}</p>
							<p class="goods-price">{{$v->price}}</p>
						</li>
					@endforeach
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
				</div>
				<div class="col-md-4">
					<ul class="lg-thumb-list clearfix">
						<li class="goods-item left-s-thumb">
							<a class="s-thumb">
								@foreach ($jiad as $k => $v)
									<img src="{{$v->img}}" alt="米家扫地机器人" title="米家扫地机器人">
								@endforeach
							</a>
						</li>
					</ul>
				</div>
				<div class="col-md-8">
					<ul class="goods-list list-active hot-list clearfix">
						@foreach ($jhot as $k => $v)
							<li class="goods-item goods-item-m">
								<div class="goods-thumb">
									<a href="/goods/{{$v->id}}">
										<img src="{{$v->fig}}">
									</a>
								</div>
								<p class="goods-info">{{$v->title}}</p>
								<p class="goods-price">{{$v->price}}元</p>
								<div class="product-label">
									<div class="goods-label">hot</div>
								</div>
							</li>
						@endforeach
					</ul>
				</div>
			</div>
			<!-- 智能设备 -->
			<div class="ide clearfix">
				<div class="title">
					<span class="page-title">智能</span>
				</div>
				<div class="col-md-4">
					<ul class="left-thumb-list clearfix">
						@foreach ($zhin as $k => $v)	
							<li class="goods-item left-m-thumb">
								<a class="m-thumb-link">
									<img src="{{$v->img}}" class="m-thumb">
								</a>
							</li>
						@endforeach
					</ul>
				</div>
				<div class="col-md-8">
					<ul class="goods-list list-active hot-list clearfix">
						@foreach ($zhot as $k => $v)
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="/goods/{{$v->id}}">
									<img src="{{$v->fig}}">
								</a>
							</div>
							<p class="goods-info">{{$v->title}}</p>
							<p class="goods-price">{{$v->price}}元</p>
							<div class="product-label">
								<div class="goods-label">hot</div>
							</div>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
			<!-- 搭配 -->
			<div class="asst clearfix">
				<div class="title">
					<span class="page-title">搭配</span>
				</div>
				<div class="col-md-4">
					<ul class="left-thumb-list clearfix">
						<ul class="left-thumb-list clearfix">
						@foreach ($dap as $k => $v)	
							<li class="goods-item left-m-thumb">
								<a class="m-thumb-link">
									<img src="{{$v->img}}" class="m-thumb">
								</a>
							</li>
						@endforeach
					</ul>
					</ul>
				</div>
				<div class="col-md-8">
					<ul class="goods-list list-active hot-list clearfix">
						@foreach ($dhot as $k => $v)
						<li class="goods-item goods-item-m">
							<div class="goods-thumb">
								<a href="#"><img src="{{$v->fig}}"></a>
							</div>
							<p class="goods-info">{{$v->title}}</p>
							<p class="goods-price">{{$v->price}}元</p>
							<div class="product-label">
								<div class="goods-label">hot</div>
							</div>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
			<!-- 周边 -->
			<div class="pia clearfix">
				<div class="title">
					<span class="page-title">周边</span>
				</div>
				<div class="col-md-4">
					<ul class="left-thumb-list clearfix">
						@foreach ($zhoubian as $k => $v)
							<li class="goods-item left-m-thumb">
								<a class="m-thumb-link">
									<img src="{{$v->img}}" class="m-thumb">
								</a>
							</li>
						@endforeach
				</div>
				<div class="col-md-8">
					<ul class="goods-list list-active hot-list clearfix">
						@foreach ($zhoubianhot as $k => $v)
							<li class="goods-item goods-item-m">
								<div class="goods-thumb">
									<a href="#"><img src="{{$v->fig}}"></a>
								</div>
								<p class="goods-info">{{$v->title}}</p>
								<p class="goods-price">{{$v->price}}元</p>
							</li>
						@endforeach
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
						@foreach ($art as $k => $v)
						<li class="goods-item other-item other-photo">
							<p class="title">{{$v->name}}</p>
							<ul class="other-silde clearfix">
								<li style="overflow:hidden">
									<a href="" class="name">{{$v->title}}</a>
									<a href="" class="des">{{$v->content}}</a>
									<a href="" class="goods-price">{{$v->price}}</a>
									<div class="other-thumb">
										<a href=""><img src="{{$v->pic}}" alt=""></a>
									</div>
								</li>
							</ul>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
			<div class="goods-video">
				<div class="video-lg-title">
					<span class="page-title">视频</span>
				</div>
				<div class="col-md-12 ">
					<ul class="video-list clearfix">
						@foreach ($video as $k => $v)
							<li class="goods-item video-item-v">
								<div class="video-thumb" title="点击播放视频" style="cursor: pointer;">
									<a><img src="{{$v->img}}" alt=""></a>
									<a class="play-btn"><i class="iconfont">&#xe692;</i></a>
								</div>
								<div class="video-title">
									<a href="" class="video-title-t">{{$v->title}}</a>
								</div>
								<p>{!!$v->content!!}</p>
							</li>
							<script type="text/javascript">
								
							</script>
							<div class="item_new_div">
					        	<div class="item_new_info">
									<div class="video-header">
						                <span class="title">{{$v->title}}</span>
						                <a class="close" >
						                	<i class="cancel" style="font-size: 25px;line-height: 30px;">x</i>
						                </a>
					            	</div>
					            	<div class="video_content">
					            		<video src="{{$v->video}}" width="100%" controls></video>
					            	</div>
					            </div>
					        </div>
					        <script type="text/javascript" src="homes/js/jquery-3.2.1.js"></script>
					    <script type="text/javascript">	
					    	$('.video-thumb').click(function(){
					    		$('.item_new_div').show();
					    	})
					    	$('.close').click(function(){
					    		$('.item_new_div').hide();
					    	})
						</script>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
	@endsection
	
	<style type="text/css">
		.item_new_div{
			width:100%;
			height:100%;
			background:rgba(0,0,0,0.4);
			position:fixed;
			left:0px;
			top:0px;
			z-index: 1000;
			display: none;

		}
		.item_new_info{
			width:600px;
			height:400px;
			background:#fff;
			position: absolute;
			left:30%;
			top:20%;
			z-index: 9999;
		}

		.video-header{
			position: relative;
			padding: 14px 20px;
			background-color: #f5f5f5;
			overflow: hidden;
		}

		.video-header .title{
			margin: 0;
			font-size: 18px;
			font-weight: 400;
			line-height: 32px;
			color: #424242;
		}

		.item_new_info .close{
			width: 30px;
			height: 30px;
			line-height: 30px;
			text-align:center;
			cursor: pointer;
			border-radius: 15px;
			position: absolute;
			right: 14px;
			top: 20px;
			z-index: 10;
		}

		.item_new_info .close:hover{
			background-color: #CD0000;
			color: #fff;
		}

		#cancel{
			font-size: 12px;
			line-height: 30px;
			vertical-align: middle;
			font-weight: normal;
		}

		.form-control{
			width: 200px;
		}
	</style>
