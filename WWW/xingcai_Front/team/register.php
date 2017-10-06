
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>财缘娱乐-官方网站</title>
<link rel="stylesheet" href="/css/nsc/reset.css?v=1.17.3.8" />
<link rel="stylesheet" href="/css/nsc/agency_register1.css?v=1.17.3.8" />
<link href="/js/nsc/dialogUI/dialogUI.css?v=1.17.3.8" media="all" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/js/nsc/jquery-1.7.min.js?v=1.17.3.8"></script>
<script type="text/javascript" src="/js/nsc/dialogUI/jquery.dialogUI.js?v=1.17.3.8"></script>
<script type="text/javascript" src="/js/nsc/common.js?v=1.17.3.8"></script>
<script type="text/javascript" src="/js/nsc/register.js?v=1.17.3.8"></script>
<script type="text/javascript" src="/skin/main/onload.js"></script>
<script type="text/javascript" src="/skin/main/reglogin.js"></script>
<script type="text/javascript" src="/skin/main/game.js"></script>
<script type="text/javascript">window.onerror=function(){return true;}</script>
<script type="text/javascript">
function registerBeforSubmit(){
	var type=$('[name=type]:checked',this).val();
	if(!this.username.value) throw('请输入帐号');
	if(!/^\w{5,15}$/.test(this.username.value)) throw('帐号由5到15位的字母、数字及下划线组成');
	if(!this.password.value) throw('请输入密码');
	if(this.password.value.length<6) throw('登入密码至少6位');
	if(!this.cpasswd.value) throw('请输入确认密码');
	if(this.cpasswd.value!=this.password.value) throw('两次输入密码不一样');
	if(!this.qq.value) throw('请输QQ号码');
	if(!this.vcode.value) throw('请输入验证码');
}
function registerSubmit(err,data){
	if(err){
		$.alert(err);
		 $("#vcode").trigger("click");
	}else{
		$.alert(data);
		
		window.setTimeout("window.location='/index.php/user/login'",3000); 
		
	}
}
		document.onkeydown = keyDown;
		function keyDown(e){
			if(event.keyCode == 13){
				$(this).closest('form').submit()
			}
		}

</script> 

</head>
<body style=" min-width:980px; overflow-x:hidden;">
<div class="zc_top"><div class="warp980 clearfix"><h1 class="logo"></h1><a href="https://ngmm.livechatvalue.com/chat/chatClient/chatbox.jsp?companyID=12395&configID=66&jid=" title="联系客服" target="_blank" class="zx_service">联系客服</a></div></div>
<div class="zc_cont">
	<div class="zc_content">
    	<span class="zc_xing"></span>
			<?php if($args[0]){ ?>
            <form action="/index.php/user/reg" onkeydown="if(event.keyCode==13){return false;}"  method="post" onajax="registerBeforSubmit" enter="true" call="registerSubmit" target="ajax">
			<input type="hidden" name="codec" value="<?=$args[0]?>" />
		<div class="zc_title">欢迎您注册网站会员，如果您已拥有账户，则可在此<a href="/index.php">登录</a><span class="text_tit1"></span></div>
		<div class="zc_list" id="apDiv4">
			<ul id="reg_con">
            <form method="POST" name="updateform" action="">
                 <input type="hidden" name="addtype" id="addtype" value="ks">
                 <input type="hidden" name="flag" value="insert">
				<li>
					<label class="zc_label">登录帐号</label>
					<div class="zc_input"><i class="iczc-number"></i>
						<input type="text" name="username" id="username" class="forget_input" placeholder="请输入帐号" onKeyUp="value=value.replace(/[\W]/g,'')" maxLength=15/>
						<p class="z1">由字母或数字组成的6-16个字符，不能连续4个相同字符，首字符不能为字母O或数字0</p>						
                        <div class="tip"><em></em><p></p></div>
					</div>
				</li>
				<!--li>
					<label class="zc_label">用户昵称</label>
					<div class="zc_input"><i class="iczc-username"></i>
						<input type="text" name="nickname" class="forget_input">
						<p>由2至6个字符组成</p>
                        <div class="tip"><em></em><p></p></div>
					</div>
				</li-->
				<li>
					<label class="zc_label">登入密码</label>
					<div class="zc_input"><i class="iczc-password"></i>
						<input id="epwd" type="password" name="password" id="password" class="forget_input" placeholder="请输入密码" onKeyUp="value=value.replace(/[\W]/g,'')" maxLength=13>
									<p class="z1">字母和数字组成6-16个字符（必须包含数字和字母）且连续三位字符不相同</p>		
                        <div class="tip"><em></em><p></p></div>
					</div>
				</li>
				<li>
					<label class="zc_label">确认密码</label>
					<div class="zc_input"><i class="iczc-password"></i>
						<input id="checkpwd" type="password" name="cpasswd" id="cpasswd" class="forget_input" placeholder="请确认密码" onKeyUp="value=value.replace(/[\W]/g,'')" maxLength=13>
						
                        <div class="tip"><em></em><p></p></div>
					</div>
				</li>
				<li>
					<label class="zc_label">QQ号码</label>
					<div class="zc_input"><i class="iczc-password"></i>
						<input type="text" name="qq" id="qq" class="forget_input" onkeyup="(this.v=function(){this.value=this.value.replace(/[^0-9]/,'');}).call(this)" maxLength=11 placeholder="请输入QQ号码">
						
                        <div class="tip"><em></em><p></p></div>
					</div>
				</li>
				<li>
					<label class="zc_label">验证码</label>
					<div class="zc_input"><i class="iczc-warning"></i>
						<input type="text" name="vcode" id="vcode" class="forget_input" style="width:150px;" placeholder="请输入验证码" maxLength=4 onkeyup="(this.v=function(){this.value=this.value.replace(/[^0-9]/,'');}).call(this)" onblur="this.v();">
						<img  onclick="this.src='/index.php/user/vcode/'+(new Date()).getTime()" title="点击刷新" style="cursor:pointer; border: 0px solid #999; vertical-align:middle;" src="/index.php/user/vcode/<?=$this->time?>" class="zc_code">
						<p></p>
                        <div class="tip"><em></em><p></p></div>
					</div>
				</li>
				<li>
					<label class="zc_label"></label>
					<div class="zc_input" style="text-align:center">
                    
		            <input type="submit" class="login_btn submit zc_btn" value="立即注册">
                      
					<a href="/index.php">已有账号登录</a>
					</div>
				</li>
                </form>
   <?php }else{?>
   <div id="error">
		<h3>
			<font class="hint_red">无效的推广链接！</font>
		</h3>
		
	</div>
    <?php }?>
			</ul>
		</div>
        <!--<div class="zc_lxkf">遇到问题? 联系<a href="https://ngmm.livechatvalue.com/chat/chatClient/chatbox.jsp?companyID=12395&configID=66&jid=" title="在线客服" target="_blank">在线客服</a></div>		-->
	</div>
    <div class="footer_lxfs">
        
                	<p class="qq_btn">QQ账号：<a href="http://wpa.qq.com/msgrd?v=3&uin=41437515&site=qq&menu=yes" title="41437515" target="_blank">41437515</a> 点击QQ图标与代理在线对话</p>
        		            </div>
</div>

<div class="login_footer"><div class="warp980">
<div class="img"><img src="/images/nsc/login/nsc_login_footer-certificate.png?v=1.17.3.8" /></div>
<div class="clearfix"><p class="t-left">浏览器建议：首选为Google浏览器，其次为火狐和IE9或IE10浏览器<br />分辨率建议：使用1024×768以上的分辨率</p>
<p class="t-right">未满18周岁禁止购买<br />Copyright © SinCai 2010-2017  财缘娱乐 版权所有</p></div>
</div></div>

</body>
</html>


