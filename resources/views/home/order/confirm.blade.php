<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>填写订单信息</title>
	<link rel="stylesheet" type="text/css" href="/homes/css/order/confirm.css">
		<link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">
	
</head>
<body>
	<div class="site-header">
	    <div class="container">
	        <div class="header-logo">
	            <a class="logo " href="/home" title="小米官网"></a>
	        </div>
	        <div class="header-title">
	        	<h2>确认订单</h2>
	        </div>
	    </div>
	</div>
	<div class="container">
		<div class="ddzxbt">收获地址</div>
		<form action="/order" method="post">
			<div class="box-bd">
			    <div class="user-address-list clearfix">
			        @if(count($address) > 0)
				        @foreach ($address as $k => $v)
					        <div class="address-item" aid="{{$v->id}}">
					            <dl">
					                <dt>
										<em class="uname">{{$v->username}}</em>
					                </dt>
					                <dd class="utel">{{$v->phone}}</dd>
					                <dd class="uaddress">
					                	{{$v->pname}} {{$v->cname}} {{$v->xname}}     
					                	<br>
					                	{{$v->detailed}}
					            	</dd>
					            </dl>
					        </div>
				        @endforeach
			        @endif
					<input type="hidden" name="address_id">
			    </div>
			</div>
			<div class="section-goods">
	            <div class="section-header clearfix">
	                <h3 class="title">商品</h3>
	                <div class="more">
	                	<a href="#">返回购物车<i class="glyphicon glyphicon-chevron-right"></i></a>
	            	</div>
	            </div>
	            @foreach ($goodsData as $k => $v)
		            <div class="section-body">
		                <ul class="goods-list">
		                    <li class="clearfix">
		                        <div class="col col-img">
		                            <img src="{{$v->fig}}" width="30" height="30">
		                        </div>
		                        <input type="hidden" name="data[{{$v->id}}][id]" value='{{$v->id}}'>
		                        <input type="hidden" name="data[{{$v->id}}][num]" value='{{$v->num}}'>
		                        <div class="col col-name">
		                            <a href="">
										{{$v->title}}                                    
									</a>
		                        </div>
		                        <div class="col col-price">
		                            {{$v->price}}元 x {{$v->num}}                            
		                        </div>
		                        <div class="col col-status">
		                            &nbsp;
		                        </div>
		                        <div class="col col-total clearfix">
		                            {{$v->price}}元
		                        </div>
		                    </li>
		                </ul>
		            </div>
		            @endforeach
		            <div class="section section-count clearfix" style="width: 100%;">
		                <div class="money-box" id="J_moneyBox">
		                    <ul class="pull-right">
		                        <li class="clearfix">
		                            <label>金额合计：</label>
		                            <span class="val">{{$total}}元</span>
		                        </li>
		                        <li class="clearfix">
		                            <label>活动优惠：</label>
		                            <span class="val">-0.00元</span>
		                        </li>
		                        <li class="clearfix">
		                            <label>优惠券抵扣：</label>
		                            <span class="val"><i id="J_couponVal">-0</i>元</span>
		                        </li>
		                        <li class="clearfix total-price">
		                            <label>应付总额：</label>
		                            <span class="val"><em data-id="J_totalPrice">{{$total}}</em>元</span>
		                        </li>
		                    </ul>
		                </div>
		            </div>
	            
	            <div class="section-bar pull-right">
	                <div class="fr">
	                	{{csrf_field()}}
	                    <input class="btn" type="submit" style="background: #ff6700" value="去结算">
	                	
	                </div>
	            </div>
	        </div>
        </form>
	</div>
	<style type="text/css">
		.active{
			border: 1px solid #ff6700;
		}
	</style>
	<script type="text/javascript" src="/homes/js/jquery-3.2.1.js"></script>

	<script type="text/javascript">
		$('.address-item').click(function(){
			//获取当前的地址id
			aid = $(this).attr('aid');
			//j将值设置到 隐藏域上
			$('input[name=address_id]').val(aid);
		});
	</script>
</body>
</html>