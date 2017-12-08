<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	@section('title')
	<title>欢迎登录</title>
	@show
	<link rel="stylesheet" type="text/css" href="/homes/css/login.css">
</head>
<body>
	<div class="h_panel ">
        <div class="h_logo">
            <a href="/home">
            	<img src="/homes/img/mistore_logo.png" alt="小米网">
            </a>
        </div>
    </div>
    @section('content')
    <div class="login_banner_panel" style="background-image: url(/homes/img/login/login-bg.jpg);">
        <div class="panel">
        	<div class="mainbox">
        		@if(session('msg'))
        		<div class="msg">
        			{{session('msg')}}
        		</div>
        		@endif
        		<div class="nav-tabs-panel">
        			<div class="nav-panel">
        				<a href="javascript:;" class="nav-link active" id="active">账号登录</a>
        				<span class="line"></span>
        				<a href="javascript:;" class="nav-link">扫码登录</a>
        			</div>
        		</div>
        		<form class="static_form" method="post" action="">
					<div class="field">
						<label>
							<img src="/Homes/img/login/yh.png" title="用户名">
						</label>
						<input name="user" class="logo_text" maxlength="32" placeholder="会员名" type="text" id="user"> 
						<div style="height: 10px;" id="t_user"></div>
					</div>
					<div class="field">
						<label>
							<img src="/Homes/img/login/mm.png" title="密码">
						</label>
						<input name="pwd" type="password" class="logo_text" maxlength="32" placeholder="密码" id="pwd"> 
						<div style="height: 10px;" id="t_pwd"></div>
					</div>
					<div class="submit">
						<button type="submit" name="button" class="sub" id="sub">登录</button>
					</div>
				</form>
				<div class="other_panel">
                  	<span class="sms_link">
                    	<a href="javascript:;" class="btna">手机短信登录/注册</a>
                  	</span>
                  	<div class="reverse">
                    	<div class="n_links_area" ">
	                      	<a class="outer-link" href="#">注册</a>
	                      	<span>|</span>
	                      	<a class="outer-link" href="#">忘记密码？</a>
                    	</div>
                    <!-- 其他登录方式 s -->
                    	<div style="display: block;" class="other_login_type">
	                      	<fieldset class="oth_type_title">
	                        	<legend align="center" class="oth_type_text">其他方式登录</legend>
	                      	</fieldset>
	                      	<div class="oth_type_links">
	                        	<a class="btn_qq icon_type" data-type="qq" href="#" title="QQ登录" target="_blank">
	                        		<i class="btn_icon_qq"></i>
	                        	</a>
	                        	<a class="btn_weibo icon_type" data-type="weibo" href="" title="微博登录" target="_blank">
	                        		<i class="btn_icon_weibo"></i>
	                        	</a>
	                        	<a class="btn_alipay icon_type" data-type="alipay" href="#" title="支付宝登录" target="_blank">
	                        		<i class="btn_icon_alipay"></i>
	                        	</a>
	                        	<a class="btn_weixin icon_type" data-type="weixin" href="#" title="微信登录" target="_blank">
	                        		<i class="btn_icon_weixin"></i>
	                        	</a>
	                      	</div>
                    	</div>
                    <!-- 其他登录方式 e -->
                    </div>
                </div>
        	</div>
        </div>
    </div>
    @show
	<div class="n-footer">  
		<div class="nf-link-area">
			<ul class="lang-select-list">
				<li><a href="javascript:;" class="lang-select-li current">简体</a>|</li>
				<li><a href="#" class="lang-select-li">繁体</a>|</li>
				<li><a href="#">English</a>|</li>
				<li><a href="#">常见问题</a></li>
			</ul>
		</div>
		<p class="nf-intro">小米公司版权所有-京ICP备10046444-
			<a class="beian-record-link" target="_blank" href="#"><span><img src="/homes/img/login/ghs.png"></span>京公网安备11010802020134号</a>-京ICP证110507号
		</p>
	</div>
</body>
</html>