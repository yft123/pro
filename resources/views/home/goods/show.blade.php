@extends('home.home')
@section('all')

@endsection
@section('title')
	<li class="item" style="margin-left: 200px;"><a href="#">小米手机</a></li>
@endsection
@section('content')
<link rel="stylesheet" type="text/css" href="/homes/css/xq.css">
<script type="text/javascript" src="/homes/js/jquery-3.2.1.js"></script>


    <form action="/jump" method="post" style="overflow: hidden;">
        <div class="xiangqing">
            <div class="neirong w">
                <div class="xiaomi6 fl">小米6</div>
            </div>  
        </div>
        <div class="jieshao mt20 w">
            <div class="left fl"><img src="{!!$goods->fig!!}" width="100%" height="100%"></div>
            <div class="right fr">
                <div class="h3 ml20 mt20">{{$goods->title}}</div>
                <div class="jianjie mr40 ml20 mt10">{!!$goods->content!!}</div>
                <div class="jiage ml20 mt10 price">{{$goods->price}}元</div>
               {{csrf_field()}} 
                <div class="xiadan ml20 mt20" style="margin-top: 90px;">
                    <button class="jrgwc">加入购物车</button>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </form>
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
                            <img src="{!!$v->pic!!}" alt="" width="100%" height="780">
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
    <script type="text/javascript">
        $(function(){
            $(".nav .notice_hd li").click(function(){
                $(this).addClass('selected').siblings().removeClass('selected');
                var index = $(this).index();
                number = index;
                $('.nav .notice_bd h6').hide();
                $('.nav .notice_bd h6:eq('+index+')').show();
            });
        })
    </script>
@endsection