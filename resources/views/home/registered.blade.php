@extends('home.login.index')

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
<!--用户名-->
var preg_user = /^[a-z][a-zA-Z0-9]{5,11}$/;

function show_user()
{
	var uval = document.getElementById("username")
	if(uval.value == "")
	{
		document.getElementById("u_span").innerHTML = "<span style='color:#f00;font-size:12px;'>请输入6～12字母数字组成的用户名</span>";
	}
}

function hide_user()
{
	var uval = document.getElementById("username")
	if(uval.value == "")
	{
		document.getElementById("u_span").innerHTML = "<span style='color:#f00;font-size:12px;margin-left:100px;'>用户名不能为空</span>";
	}
	else
	{
		if(preg_user.test(uval.value))
		{
			document.getElementById("u_span").innerHTML = "<span style='color:green;font-size:12px;'>√</span>";
		}
		else
		{
			document.getElementById("u_span").innerHTML = "<span style='color:#f00;font-size:12px;'>请输入正确的用户名</span>";
		}
	}
}
<!--用户名结束-->
<!--密码-->
var preg_pass = /^[0-9][a-zA-Z0-9]{5,18}$/;
function show_pwd()
{
	var pval=document.getElementById("pwd")
	if(pval.value == "")
	{
		document.getElementById("pwd_span").innerHTML = "<span style='color:#f00;font-size:12px;'>请输入6~18位任意组成的密码</span>"
		} 
	}
function hide_pwd()
{
	var pval=document.getElementById("pwd")
	if(pval.value == "")
	{
		document.getElementById("pwd_span").innerHTML = "<span style='color:#f00;font-size:12px;margin-left:100px;'>密码不能为空</span>"	
		}	
		else{
				if(preg_pass.test(pval.value))
				
				{
					document.getElementById("pwd_span").innerHTML = "<span style='color:green;font-size:12px;'>√</span>"
					}
		else{
			
			document.getElementById("pwd_span").innerHTML = "<span style='color:#f00;font-size:12px;margin-left:100px;'>请输入正确密码</span>";
			}
		}
	}
<!--密码结束-->
<!--确认密码-->
var preg_pass = /^[0-9][a-zA-Z0-9]{5,18}$/;
function show_pass()
{
	var pval=document.getElementById("pass")
	if(pval.value == "")
	{
		document.getElementById("pass_span").innerHTML = "<span style='color:#f00;font-size:12px;'>请输入6~18位任意组成的密码</span>"
		} 
	}
function hide_pass()
{
	var pval=document.getElementById("pass")
	if(pval.value == "")
	{
		document.getElementById("pass_span").innerHTML = "<span style='color:#f00;font-size:12px;margin-left:100px;'>密码不一致</span>"	
		}	
		else{
				if(preg_pass.test(pval.value))
				
				{
					document.getElementById("pass_span").innerHTML = "<span style='color:green;font-size:12px;'>√</span>"
					}
		else{
			
			document.getElementById("pass_span").innerHTML = "<span style='color:#f00;font-size:12px;margin-left:100px;'>请输入正确密码</span>";
			}
		}
	}
<!--确认密码结束-->
<!--手机号-->
var preg_phone = /(^0{0,1}1[3|4|5|6|7|8|9][0-9]{9}$)/;
function show_phone()
{
	var phval=document.getElementById("phone")
	if(phval.value == "")
	{
		document.getElementById("phone_span").innerHTML = "<span style='color:#f00;font-size:12px;margin-left:95px;'>请输入您的手机号</span>"
		} 
	}
function hide_phone()
{
	var phval=document.getElementById("phone")
	if(phval.value == "")
	{
		document.getElementById("phone_span").innerHTML = "<span style='color:#f00;font-size:12px;margin-left:95px;'>手机号不能为空</span>"	
		}	
		else{
				if(preg_phone.test(phval.value))
				
				{
					document.getElementById("phone_span").innerHTML = "<span style='color:green;font-size:12px;'>√</span>"
					}
		else{
			
			document.getElementById("phone_span").innerHTML = "<span style='color:#f00;font-size:12px;margin-left:95px;'>请输入正确的手机号</span>";
			}
		}
	}
<!--手机号结束-->
	$(function(){
		
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
					<input onfocus="show_user()" onblur="hide_user()" class="shurukuang" type="text" name="username" id="username" placeholder="请输入你的用户名">
					<span id="u_span"></span>
				</div>
				<div class="username">
					<i style="letter-spacing: 17px;">密码:</i>
					<input onfocus="show_pwd()" id="pwd" onblur="hide_pwd()" class="shurukuang" type="password" name="password" placeholder="请输入你的密码"/>
					<span id="pwd_span"></span>
				</div>
				
				<div class="username">
					<i style="letter-spacing: 4px;">确认密码:</i>
					<input onfocus="show_pass()" onblur="hide_pass()" class="shurukuang" id="pass" type="password" name="repassword" placeholder="请确认你的密码"/>
					<span id="pass_span"></span>
				</div>
				<div class="username">
					<i>手机号:</i>
					<input id="phone" onfocus="show_phone()" onblur="hide_phone()" class="shurukuang" type="text" name="phone" placeholder="请填写正确的手机号"/>
					<span id="phone_span"></span>
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




