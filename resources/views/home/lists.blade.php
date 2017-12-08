@extends('home.home')
@section('all')

@endsection
@section('title')
	<li class="item" style="margin-left: 200px;"><a href="#">小米手机</a></li>
@endsection
@section('content')
	<link rel="stylesheet" type="text/css" href="/homes/css/lists.css">
	<script type="text/javascript" src="/homes/js/index.js"></script>
	<div class="content1">
		<div id="focus-banner">
			  <ul id="focus-banner-list">
			    <li> 
			    	<a href="#" class="focus-banner-img"> 
			    		<img src="/homes/images/banner1.jpg" alt=""> 
			    	</a>
			    </li>
			    <li> 
			    	<a href="#" class="focus-banner-img"> 
			    		<img src="/homes/images/banner2.jpg" alt=""> 
			    	</a>
			    </li>
			  </ul>
			  <a href="javascript:;" id="next-img" class="focus-handle"></a> 
			  <a href="javascript:;" id="prev-img" class="focus-handle"></a>
			  <ul id="focus-bubble">
			  </ul>
		</div>
		<!-- <div class="container channel-title"> 
			<h2>现货特卖</h2> 
		</div>
		<div class="container channel-product-top">  
			<div class="product-cell" style="margin-left: 0;"> 
				<div class="figure"> 
					<a class="exposure" href="#"> 
						<img alt="小米Max 2 大屏大电量" src="holder.js/100px100p"> 
					</a> 
				</div> 
				<div class="content"> 
					<h3 class="title"> 
						<a class="exposure" href="#" target="_blank">小米Max 2 大屏大电量</a> 
					</h3> 
					<p class="desc">6.44" 大屏，5300mAh大电量</p> 
					<p class="price"> 
						<strong>1399</strong>元起 
					</p> 
					<p class="link"> 
						<a class="exposure" href="#" target="_blank">了解产品 &gt;
						</a> 
					</p> 
				</div> 
			</div>  
		</div>
		<div class="container channel-line" style=" height:14px; background-color:#f5f5f5;"></div>
		<div class="container channel-product"> 
			<div class="row" style="height: 100%;">  
				<div class="span10 product-cell" style="margin-left: 0;"> 
					<div class="figure"> 
						<a class="exposure" href="#" target="_blank">
							<img alt="红米Note 4X" src="holder.js/100px100p"> 
						</a> 
					</div> 
					<h3 class="title"> 
						<a class="exposure" href="#">红米Note 4X</a> 
					</h3> 
					<p class="desc">多彩金属，超长续航</p>  
					<p class="price"> 
						<strong>999</strong>元起  
					</p> 
				</div>  
				<div class="span10 product-cell"> 
					<div class="figure"> 
						<a class="exposure" href="#">
							 <img alt="红米Note 4X" src="holder.js/100px100p">
						</a> 
					</div> 
					<h3 class="title"> 
						<a class="exposure" href="#">红米4X  超长续航</a> 
					</h3> <p class="desc">超长续航，5"舒适单手握感</p>  
					<p class="price"> 
						<strong>699</strong>元起  
					</p> 
				</div>  
			</div> 
		</div>
		<div class="container channel-line" style=" height:14px; background-color:#f5f5f5;"></div>
		<div class="container channel-product-th"> 
			<div class="row" style="height: 100%;">  
				<div class="span10 product-cell" style="margin-left: 0;"> 
					<div class="figure"> 
						<a class="exposure" href="#"> 
							<img alt="红米Note 5A 标准版" style="background-color:#B7CED0;" src="holder.js/100px100p"> 
						</a> 
					</div> 
					<h3 class="title"> 
						<a class="exposure" href="#">红米Note 5A 标准版</a> 
					</h3> 
					<p class="desc">5.5" 大屏，超轻薄机身</p>  
					<p class="price"> 
						<strong>699</strong>元  
					</p> 
				</div>  
				<div class="span10 product-cell"> 
					<div class="figure"> 
						<a class="exposure" href="#"> 
							<img alt="小米Note 2" style="background-color:#7C82AA;" src="holder.js/100px100p"> 
						</a> 
					</div> 
					<h3 class="title"> 
						<a class="exposure" href="#" >小米Note 2</a> 
					</h3> 
					<p class="desc">双曲面，2256万像素相机</p>  
					<p class="price"> 
						<strong>2799</strong>元起  
					</p> 
				</div>  
				<div class="span10 product-cell"> 
					<div class="figure"> 
						<a class="exposure" href="#"> 
							<img alt="红米Note 4X 浅蓝色" style="background-color:#AAC6DC;" src="holder.js/100px100p"> 
						</a> 
					</div> 
					<h3 class="title"> 
						<a class="exposure" href="#">红米Note 4X 浅蓝色</a> 
					</h3> 
					<p class="desc">金属机身，超长续航</p>  
					<p class="price"> 
						<strong>999</strong>元起  
					</p> 
				</div>  
			</div> 
		</div>
		<div class="container channel-title"> 
			<h2>明星推荐</h2> 
		</div>
		<div class="container channel-auto""> 
			<div class="auto-row">   
				<a class="auto-cell" href="#" style=" width:606px; height:744px; left:0px; top:0px;display: block;"> 
					<img src="holder.js/100px100p"> 
				</a>    
				<a class="auto-cell" href="#" style=" width:606px; height:744px; left:620px; top:0px;display: block;"> 
					<img src="holder.js/100px100p"> 
				</a>   
			</div> 
		</div>
		<div class="container channel-title"> 
			<h2>现货特卖</h2> 
		</div>
		<div class="container channel-product-top">  
			<div class="product-cell" style="margin-left: 0;"> 
				<div class="figure"> 
					<a class="exposure" href="#"> 
						<img alt="小米Max 2 大屏大电量" src="holder.js/100px100p"> 
					</a> 
				</div> 
				<div class="content"> 
					<h3 class="title"> 
						<a class="exposure" href="#" target="_blank">小米Max 2 大屏大电量</a> 
					</h3> 
					<p class="desc">6.44" 大屏，5300mAh大电量</p> 
					<p class="price"> 
						<strong>1399</strong>元起 
					</p> 
					<p class="link"> 
						<a class="exposure" href="#" target="_blank">了解产品 &gt;
						</a> 
					</p> 
				</div> 
			</div>  
		</div>
		<div class="container channel-line" style=" height:14px; background-color:#f5f5f5;"></div>
		<div class="container channel-product"> 
			<div class="row" style="height: 100%;">  
				<div class="span10 product-cell" style="margin-left: 0;"> 
					<div class="figure"> 
						<a class="exposure" href="#" target="_blank">
							<img alt="红米Note 4X" src="holder.js/100px100p"> 
						</a> 
					</div> 
					<h3 class="title"> 
						<a class="exposure" href="#">红米Note 4X</a> 
					</h3> 
					<p class="desc">多彩金属，超长续航</p>  
					<p class="price"> 
						<strong>999</strong>元起  
					</p> 
				</div>  
				<div class="span10 product-cell"> 
					<div class="figure"> 
						<a class="exposure" href="#">
							 <img alt="红米Note 4X" src="holder.js/100px100p">
						</a> 
					</div> 
					<h3 class="title"> 
						<a class="exposure" href="#">红米4X  超长续航</a> 
					</h3> <p class="desc">超长续航，5"舒适单手握感</p>  
					<p class="price"> 
						<strong>699</strong>元起  
					</p> 
				</div>  
			</div> 
		</div>
		<div class="container channel-line" style=" height:14px; background-color:#f5f5f5;"></div>
		<div class="container channel-product-th"> 
			<div class="row" style="height: 100%;">  
				<div class="span10 product-cell" style="margin-left: 0;"> 
					<div class="figure"> 
						<a class="exposure" href="#"> 
							<img alt="红米Note 5A 标准版" style="background-color:#B7CED0;" src="holder.js/100px100p"> 
						</a> 
					</div> 
					<h3 class="title"> 
						<a class="exposure" href="#">红米Note 5A 标准版</a> 
					</h3> 
					<p class="desc">5.5" 大屏，超轻薄机身</p>  
					<p class="price"> 
						<strong>699</strong>元  
					</p> 
				</div>  
				<div class="span10 product-cell"> 
					<div class="figure"> 
						<a class="exposure" href="#"> 
							<img alt="小米Note 2" style="background-color:#7C82AA;" src="holder.js/100px100p"> 
						</a> 
					</div> 
					<h3 class="title"> 
						<a class="exposure" href="#" >小米Note 2</a> 
					</h3> 
					<p class="desc">双曲面，2256万像素相机</p>  
					<p class="price"> 
						<strong>2799</strong>元起  
					</p> 
				</div>  
				<div class="span10 product-cell"> 
					<div class="figure"> 
						<a class="exposure" href="#"> 
							<img alt="红米Note 4X 浅蓝色" style="background-color:#AAC6DC;" src="holder.js/100px100p"> 
						</a> 
					</div> 
					<h3 class="title"> 
						<a class="exposure" href="#">红米Note 4X 浅蓝色</a> 
					</h3> 
					<p class="desc">金属机身，超长续航</p>  
					<p class="price"> 
						<strong>999</strong>元起  
					</p> 
				</div>
				<div class="span10 product-cell" style="margin-left: 0;margin-top: 10px;"> 
					<div class="figure"> 
						<a class="exposure" href="#"> 
							<img alt="红米Note 4X 浅蓝色" style="background-color:#AAC6DC;" src="holder.js/100px100p"> 
						</a> 
					</div> 
					<h3 class="title"> 
						<a class="exposure" href="#">红米Note 4X 浅蓝色</a> 
					</h3> 
					<p class="desc">金属机身，超长续航</p>  
					<p class="price"> 
						<strong>999</strong>元起  
					</p> 
				</div> 
				<div class="span10 product-cell" style="margin-top: 10px;"> 
					<div class="figure"> 
						<a class="exposure" href="#"> 
							<img alt="红米Note 4X 浅蓝色" style="background-color:#AAC6DC;" src="holder.js/100px100p"> 
						</a> 
					</div> 
					<h3 class="title"> 
						<a class="exposure" href="#">红米Note 4X 浅蓝色</a> 
					</h3> 
					<p class="desc">金属机身，超长续航</p>  
					<p class="price"> 
						<strong>999</strong>元起  
					</p> 
				</div> 
				<div class="span10 product-cell" style="margin-top: 10px;"> 
					<div class="figure"> 
						<a class="exposure" href="#"> 
							<img alt="红米Note 4X 浅蓝色" style="background-color:#AAC6DC;" src="holder.js/100px100p"> 
						</a> 
					</div> 
					<h3 class="title"> 
						<a class="exposure" href="#">红米Note 4X 浅蓝色</a> 
					</h3> 
					<p class="desc">金属机身，超长续航</p>  
					<p class="price"> 
						<strong>999</strong>元起  
					</p> 
				</div>   
			</div> 
		</div>
		<div class="container channel-title"> 
			<h2>现货特卖</h2> 
		</div>
		<div class="container channel-product-top">  
			<div class="product-cell" style="margin-left: 0;"> 
				<div class="figure"> 
					<a class="exposure" href="#"> 
						<img alt="小米Max 2 大屏大电量" src="holder.js/100px100p"> 
					</a> 
				</div> 
				<div class="content"> 
					<h3 class="title"> 
						<a class="exposure" href="#" target="_blank">小米Max 2 大屏大电量</a> 
					</h3> 
					<p class="desc">6.44" 大屏，5300mAh大电量</p> 
					<p class="price"> 
						<strong>1399</strong>元起 
					</p> 
					<p class="link"> 
						<a class="exposure" href="#" target="_blank">了解产品 &gt;
						</a> 
					</p> 
				</div> 
			</div>  
		</div>
		<div class="container channel-line" style=" height:14px; background-color:#f5f5f5;"></div>
		<div class="container channel-product"> 
			<div class="row" style="height: 100%;">  
				<div class="span10 product-cell" style="margin-left: 0;"> 
					<div class="figure"> 
						<a class="exposure" href="#" target="_blank">
							<img alt="红米Note 4X" src="holder.js/100px100p"> 
						</a> 
					</div> 
					<h3 class="title"> 
						<a class="exposure" href="#">红米Note 4X</a> 
					</h3> 
					<p class="desc">多彩金属，超长续航</p>  
					<p class="price"> 
						<strong>999</strong>元起  
					</p> 
				</div>  
				<div class="span10 product-cell"> 
					<div class="figure"> 
						<a class="exposure" href="#">
							 <img alt="红米Note 4X" src="holder.js/100px100p">
						</a> 
					</div> 
					<h3 class="title"> 
						<a class="exposure" href="#">红米4X  超长续航</a> 
					</h3> <p class="desc">超长续航，5"舒适单手握感</p>  
					<p class="price"> 
						<strong>699</strong>元起  
					</p> 
				</div>  
			</div> 
		</div>
		<div class="container channel-title"> 
			<h2>手机好伴侣</h2> 
		</div>
		<div class="container channel-product-four"> 
			<div class="row">  
				<div class="product-cell" style="margin-left: 0;"> 
					<div class="figure"> 
						<a class="exposure" href="#"> 
							<img class="J_lazy" alt="小米 USB 充电器 " style="background-color:#CAE0E9;" src="//cdn.cnbj0.fds.api.mi-img.com/b2c-mimall-media/7f464eeef72ffe9e7b5e7c583dd59a51.jpg?bg=CAE0E9"> 
						</a> 
					</div> 
					<h3 class="title"> 
						<a class="exposure" href="#">小米 USB 充电器 </a> 
					</h3> 
					<p class="desc">精致小巧，便携出行</p>  
					<p class="price"> 
						<strong>49</strong>元  
					</p> 
				</div>  
				<div class="span5 product-cell"> 
					<div class="figure"> 
						<a class="exposure" href="#"> 
							<img class="J_lazy" alt="小米二合一数据线" style="background-color:#C1CBDE;" src="//cdn.cnbj0.fds.api.mi-img.com/b2c-mimall-media/c17fb8909f9cffb748b543fe93788c54.jpg?bg=C1CBDE"> 
						</a> 
					</div> 
					<h3 class="title"> 
						<a class="exposure" href="#">小米二合一数据线</a> 
					</h3> 
					<p class="desc">两种接口，支持多种设备</p>  
					<p class="price"> 
						<strong>19.9</strong>元  
					</p> 
				</div>  
				<div class="span5 product-cell"> 
					<div class="figure"> 
						<a class="exposure" href="#"> 
							<img class="J_lazy" alt="小米支架式自拍杆" style="background-color:#CCCACE;" src="//cdn.cnbj0.fds.api.mi-img.com/b2c-mimall-media/2a4a34eb100d510e8e8c75d800ceb272.jpg?bg=CCCACE"> 
						</a> 
					</div> 
					<h3 class="title"> 
						<a class="exposure" href="#">小米支架式自拍杆</a> 
					</h3> 
					<p class="desc">解放双手，定格更美的镜头</p>  
					<p class="price"> 
						<strong>89</strong>元  
					</p> 
				</div>  
				<div class="span5 product-cell"> 
					<div class="figure"> 
						<a class="exposure" href="#"> 
							<img class="J_lazy" alt="降噪耳机Type-C版" style="background-color:#D0D7D9;" src="//i8.mifile.cn/b2c-mimall-media/dae25b91f731435b60aee823060f6c01.jpg?bg=D0D7D9"> 
						</a> 
					</div> 
					<h3 class="title"> 
						<a class="exposure" href="#">降噪耳机Type-C版</a> 
					</h3> 
					<p class="desc">随时随地，安静聆听好声音</p>  
					<p class="price"> 
						<strong>299</strong>元  
					</p> 
				</div>  
			</div> 
		</div>
		<div class="container channel-line" style=" height:14px; background-color:#f5f5f5;"></div> -->
		<div class="c-nav">
		    <div class="container">
		        <a href="#">首页</a>
		        <span class="sep">&gt;</span>
		        <a href="#">智能摄像机频道</a>    
		    </div>
		</div>
		<div class="c-con">
    		<div class="container">
                <div class="goods-list-box">
            		<div class="goods-list clearfix">
                        <div class="goods-item">
	                    	<div class="figure-img">
	                    		<a href="#">
	                    			<img src="holder.js/200x200" alt="">
	                    		</a>
	                    	</div>
                    		<p class="desc"></p>                    
                    		<h2 class="title">
                    			<a href="#">米家小白智能摄像机</a>
                    		</h2>
                    		<p class="price">399元</p>
                    		<div class="thumbs">
                        		<ul class="thumb-list clearfix">
                            		<li>
                            			<img src="holder.js/34x34" width="34" height="34" alt="米家小白智能摄像机 白色">
                            		</li>                        
                            	</ul>
                    		</div>
                    		<div class="actions clearfix">
                        		<div class="btn-like bt">
                        			<i class="icon">
                        				<img src="/homes/images/likes.png">
                        			</i>
                        		</div>
                        		<div class="btn-buy bt">
                        			<i class="icon" id="icon">
                        				<img src="/homes/images/gwc.png">
                        			</i>
                        		</div>                    
                        	</div>
                		</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	</div>
@endsection