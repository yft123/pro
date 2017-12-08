@extends('home.home')
@section('all')

@endsection
@section('title')
	<li class="item" style="margin-left: 170px;"><a href="#">小米手机</a></li>
@endsection
@section('content')
<link rel="stylesheet" type="text/css" href="/homes/css/details.css">
	<div class="pro-choose-main container">
        <div class="pro-view">
            <!-- 左侧轮播图 -->
            <div class="img-con">
                <div class="apper">   
                    <div class="port">
                        <div class="sliderWrap">
                            <img class="slider done" src="/homes/images/pp.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pro-in">
            <h1 class="pro-title">米家小白智能摄像机</h1>
            <!-- 提示 -->
            <p class="sale-desc">水平360度，全景拍摄 / 1080P全高清，专业芯片 / 移动侦测，时刻守护 / 听声辨位，语音互动 /  呆萌外形，一见倾心</p>
            <!-- 选择第一级别 -->
            <span class="pro-price">399元 </span>
            <!-- 主体 -->
            <div class="c-main">
                <!-- 分仓地址 -->
                <div class="address-wrap"> 
                	<div class="user-default-address"> 
                		<i class="iconfont-location">
							<img src="/homes/images/db.png">
                		</i> 
                		<div> 
                			<div class="address-info">
                				<span class="item">北京</span>
                				<span class="item">北京市</span>
                				<span class="item">东城区</span>
                				<span class="item">永定门外街道</span>
                			</div> 
                			<span class="switch-choose-regions"> 修改 </span> 
                		</div> 
                		<div class="product-status active"> 
                			<span class="sale">有现货</span> 
                		</div> 
                	</div>
                </div>
                <!-- 产品版本 -->
                <div class="list-wrap">  
                	<div class="pro-choose pro-choose-col2 J_step" data-index="0"> 
                		<div class="step-title" data-name="选择颜色"> 选择颜色  </div> 
                		<ul class="step-list clearfix">    
                			<li class="btn btn-biglarge active" data-id="2154000002" data-cid="1154000008" data-name="米家小白智能摄像机 白色" data-price="399元" data-value="白色" data-index="0">  
                				<a href="javascript:;">   <!-- <img src="https://i8.mifile.cn/v1/a1/b832d06b-7267-12ca-720a-f1b917f4f248.jpg" data-src="//i8.mifile.cn/v1/a1/b832d06b-7267-12ca-720a-f1b917f4f248.jpg" alt="通用" class="done"> -->   白色 </a> 
                			</li>   
                		</ul> 
                	</div>  
                </div>
                </div>
                <div class="hide"></div>
                <!-- 已选择的产品 -->
                <div class="pro-list">
                	<ul>   
                		<li>米家小白智能摄像机 白色  
                			<span>  399元</span> 
                		</li>        
                		<li class="totlePrice">  总计  ：399元  </li>
                	</ul>
                </div>
                <!-- 购买按钮 -->
                <ul class="btn-wrap clearfix">       
                	<li> 
                		<a href="javascript:;" class="btn btn-primary" data-name="加入购物车">加入购物车</a> 
                	</li>     
                </ul>
                <div class="pro-policy">
                    <i class="iconfont support"></i>
                    <i class="iconfont nosupport hide"></i>
                    <span class="J_tips ">支持7天无理由退货</span>
                </div>
            </div>
        </div>
    </div>
@endsection