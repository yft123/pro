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