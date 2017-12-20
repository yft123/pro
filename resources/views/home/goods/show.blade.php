@extends('home.home')
@section('all')

@endsection
@section('title')
	<li class="item" style="margin-left: 200px;"><a href="#">小米手机</a></li>
@endsection
@section('content')
<link rel="stylesheet" type="text/css" href="/homes/css/xq.css">
<script type="text/javascript" src="/homes/js/jquery-3.2.1.js"></script>
    <div class="all">
    <!--导航标题开始-->
        <div class="nav-title">
            <div class="tit">
                <a href='/home'>首页</a>
            </div>
        </div>
        <!--导航标题结束-->
        <!--主体左面开始-->
        <div class="cons">
            <div class="row">
                <div class="cons-left">
                    <div class="goods-small-pic">
                        <ul id="goodsPicList">
                            <li class="current">
                                <img src="{{$goods->fig}}" alt="" />
                            </li>
                           
                        </ul>
                    </div>
                    <div class="goods-big-pic" style="display:block">
                        <img class="img1" src="{{$goods->fig}}" alt="" />
                    </div>
                    
                </div>
                
                <form  action="/cart" method="post" style="overflow: hidden;">
                    <div class="cons-right">
                        <dl class="goods-info-box">
                            <dt class="goods-info-head">
                                <dl id="J_goodsInfoBlock">
                                    <dt id="goodsName" class="goods-name">{{$goods->title}}</dt>
                                    <dd class="goods-subtitle">
                                        <p> {!!$goods->content!!}</p>
                                    </dd>
                                    <dd class="goods-subtitle goods" style="display: block;">
                                        <span class="pro-price J_proPrice"> {{$goods->price}}元</span>
                                    </dd>
                                </dl>
                            </dt>
                            <!--主体开始-->
                            <div class="J_main">
                                <!--分仓地址开始-->
                                <!-- <div class="address-wrap">
                                    
                                </div> -->
                                <input type="hidden" name="num" value="1">
                                <div class="list-wrap" style="margin-top: 50px;">
                                    <div class="pro">
                                        <div class="pro-title">选择颜色</div>
                                        <ul class="ul-list">
                                            <li class="li-list active">
                                                <a>
                                                    <img class="done" src="{{$goods->fig}}" alt="">{{$goods->color}}
                                                </a>
                                            </li>
                                           
                                        </ul>   
                                    </div>
                                    
                                </div>
                                <!--产品版本结束-->
                                <!--已选择的产品开始-->
                                <div class="pro-list" style="display: block;">
                                    <ul>
                                        <li>
                                            {{$goods->title}} {{$goods->color}}
                                            <span style="margin-left: 120px;">{{$goods->price}}</span>
                                        </li>
                                        <li class="totlePrice">总计  ：{{$goods->price}}元</li>
                                    </ul>
                                </div>
                                
                                <!--已选择的产品结束-->
                                <input type="hidden" name="goods_id" value="{{$goods->id}}">
                                <!--购买按钮开始-->
                                {{csrf_field()}} 
                                <ul class="btn-wrap clearfix">  
                                    <li> 
                                        <button class="btn btn-primary  btn-biglarge">加入购物车</button> 
                                    </li>  
                                </ul>
                                <!--购买按钮结束-->
                            </div>
                        </dl>
                    </div>
                </form>
                
            </div>
                    
        </div>

        <!--主体右面结束-->
    </div>
    <div class="content">
        <div class="container">
            <li class="nav">
                <ul class="notice_hd">
                    <li class="selected">
                        <a href="javascript:;">图集</a>
                    </li>
                    <li class="">
                        <a href="javascript:;">评论</a>
                    </li>
                </ul>
                <div class="notice_bd">
                    <h6 style="display: block;" class="">
                        @foreach ($goods_pic as $k => $v)
                            <img src="{{$v->pic}}" alt="" width="100%" height="780">
                        @endforeach
                    </h6>
                    <h6 class="">
                        <div class="comment-order-title">
                            <div class="title">
                                <h3 class="comment-name">最有帮助的评价</h3>
                            </div>
                        </div>
                        <ul class="comment-box-list">
                            <li class="item-rainbow">
                                
                            </li>
                        </ul>
                    </h6>
                </div>
            </li>
        </div>
    </div>
    <script type="text/javascript" src="/homes/js/jquery-3.2.1.js"></script>
    <script>

        $(function(){
            $(".nav .notice_hd li").click(function(){
                $(this).addClass('selected').siblings().removeClass('selected');
                var index = $(this).index();
                number = index;
                $('.nav .notice_bd h6').hide();
                $('.nav .notice_bd h6:eq('+index+')').show();
            });
        })
//侧边选项卡
    $(function(){
        $("li").click(function(){
            $(this).addClass("current").siblings("li").removeClass("current");
            $(this).addClass("active").siblings("li").removeClass("active");
            var this_li = $(this).position()
            var i = $(this).index()
            $(".goods-big-pic").eq(i).css('display','block').siblings(".goods-big-pic").css('display','none');
            $(".goods").eq(i).css('display','block').siblings(".goods").css('display','none');

            
        });

        
    });

$(function(){
    //滑到li上实现如下功能：
    $("li").click(function(){
        //获取当前导航的位置，
        var this_li = $(this).position()
        //获取当前导航的索引
        var i = $(this).index()
        //根据指定的索引匹配对应的div盒子
        $(".pro-list").eq(i).css('display','block').siblings(".pro-list").css('display','none');

        
    });
    
});       

</script>
<style type="text/css">
.content{
    border-top: 1px solid #666;
    margin-top: 50px;
    background: #f8f8f8;
}

.nav{
    overflow: hidden;
}

.cen{
    width: 1200px;
    margin: 0 auto;
}

.nav .notice_hd{
    width: 200px;
    margin: 0px auto;
}

.selected a{
    color: #f40;
}

.nav li{
    font-size: 30px;
    float: left;
    list-style: none;
    margin: 0 auto;
}

.nav li a{
    margin-left: 30px;
}

.notice_bd{
    width: 100%;
    padding-bottom: 50px;
    overflow: hidden;
}

.notice_bd h6{
    width: 100%;
    overflow: hidden;
    display: none;
}

.comment-order-title{
    height: 60px;
    line-height: 60px;
    margin-top: 10px;
    margin-bottom: 10px;
    font-size: 20px;
}

.comment-order-title .comment-name{
    color: #424242;
}

.comment-box-list .item-rainbow{
    border-left: 2px solid #00c0a5;
    margin-bottom: 14px;
    padding-top: 45px;
    padding-left: 105px;
    background: #fff;
    padding-bottom: 60px;
    position: relative;
}
</style>
@endsection