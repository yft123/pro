@extends('home.order')

@section('con')
<link rel="stylesheet" type="text/css" href="/homes/css/core/create.css">
<div class="uc-box">
    <div class="uc-content-box">
        <div class="box-bd">
            <div class="portal-main">
                <div class="user-card">
                    <h2 class="username">1346367242</h2>
                    <p class="tip">您好</p>
                    <a class="link" href="#">修改个人信息 &gt;</a>
                    <img class="avatar" src="https://account.xiaomi.com/static/img/passport/photo.jpg" width="150" height="150" alt="1346367242">
                </div>
                <div class="user-actions">
                    <ul class="action-list">
                        <li>
                        	账户安全：<span class="level level-2">普通</span>
                        </li>
                        <li>
                        	绑定手机：<span class="tel">188********20</span>
                        </li>
                        
                        <li>
                        	绑定邮箱：<span class="tel"></span>
                        	<a class="btn btn-small btn-primary">绑定</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="portal-sub">
                <ul class="info-list clearfix">
                    <li>
                        <h3>待支付的订单：<span class="num">0</span></h3>
                        <a href="#">查看待支付订单<i class="iconfont">></i></a>
                        <img src="//s01.mifile.cn/i/user/portal-icon-1.png" alt="">
                    </li>
                    <li>
                        <h3>待收货的订单：<span class="num">0</span></h3>
                        <a href="#">查看待收货订单<i class="iconfont">></i></a>
                        <img src="//s01.mifile.cn/i/user/portal-icon-2.png" alt="">
                    </li>
                    <li>
                        <h3>待评价商品数：<span class="num">0</span></h3>
                        <a href="#">查看待评价商品<i class="iconfont">></i></a>
                        <img src="//s01.mifile.cn/i/user/portal-icon-3.png" alt="">
                    </li>
                    <li>
                        <h3>喜欢的商品：<span class="num">0</span></h3>
                        <a href="#">查看喜欢的商品<i class="iconfont">></i></a>
                        <img src="//s01.mifile.cn/i/user/portal-icon-4.png" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection