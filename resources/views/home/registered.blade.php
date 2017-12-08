@extends('home.login')

@section('content')
<link rel="stylesheet" type="text/css" href="/homes/css/registered.css">
<script type="text/javascript" src="/homes/js/jquery-3.2.1.min.js"></script>
<style type="text/css">
	#form button.disabled{
		background: #ddd;
		cursor:not-allowed;
	}

</style>
<script type="text/javascript">

	$(function(){
		$('#username').blur(function(){
			var user = $('input[name=username]').val();
			// alert(typeof(user));
			if (user=='') {
				$('#user').html('用户名不能为空').css('color','red');
			}else if(user.length<6){
				$('#user').html('用户名不能小于6位').css('color','red');
			}else{
				$('#user').html('√').css('color','green');
			}
		})
		$('#password').blur(function(){
			var pwd = $('input[name=password]').val();
			if (pwd='') {
				$('#user').html('密码不能为空').css('color','red');
			}else if(pwd.length<6){
				$('#user').html('用户名不能为空').css('color','red');
			}else{
				$('#user').html('√').css('color','green');
			}
		})
		$('#btn').click(function () {
			var phone = $('input[name=phone]').val();
			var zz = /1\d{10}/;

			if (!zz.test(phone)) {
				$('#phone').html('手机格式不正确').css('color','red');
				return;
			}
			$.get('/message',{phone:phone},function(data){
				// console.log(data);
				alert(data.data.vcode);
			})

			$(this).addClass('disabled');
			var t = 60;
			
			var inte = setInterval(function(){
				$('#btn').html(t+'秒之后再重新发送').css('width,','70px');
				t--;
				if(t < 0) {
					clearInterval(inte);
					$('#btn').removeClass('disabled');
					$('#btn').html('发送验证码');
				}
			}, 1000);
			
		})
	})
</script>
	
<form  method="post" action="/home/login" id="form">
	<div class="regist">
		<div class="regist_center">
			<div class="regist_top">
				<div class="left fl">会员注册</div>
				<div class="right fr"><a href="/home" target="_self">小米商城</a></div>
				<div class="clear"></div>
				<div class="xian center"></div>
			</div>
			<div class="regist_main center">
				<div class="username">
					<i>用户名:</i>
					<input class="shurukuang" type="text" name="username" id="username" placeholder="请输入你的用户名">
					<span id="user">用户名可用6到16位(字母,数字,下划线)</span>
				</div>
				<div class="username">
					<i style="letter-spacing: 17px;">密码:</i>
					<input class="shurukuang" type="password" name="password" placeholder="请输入你的密码"/>
					<span id="pwd"></span>
				</div>
				
				<div class="username">
					<i style="letter-spacing: 4px;">确认密码:</i>
					<input class="shurukuang" type="password" name="repassword" placeholder="请确认你的密码"/>
					<span id="repwd"></span>
				</div>
				<div class="username">
					<i>手机号:</i>
					<input class="shurukuang" type="text" name="phone" placeholder="请填写正确的手机号"/>
					<span id="phone"></span>
				</div>
				<div class="username">
					<div class="left fl">
						<i>验证码:</i>
						<input class="yanzhengma" type="text" name="vcode" placeholder="请输入验证码"/>
					</div>
					<div class="right fl">
						<button type="button" id="btn" class="btn" style="">点击获取</button>
					</div>
					<div class="clear"></div>
				</div>
			</div>
			{{csrf_field()}}
			<div class="regist_submit">
				<button class="submit">立即注册</button>
			</div>
			
		</div>
	</div>
</form>
@endsection
@section('title')
	<title>欢迎注册</title>
@endsection



