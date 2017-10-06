
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="renderer" content="webkit">
    <title>财缘娱乐-官方网站</title>
	
    <link rel="stylesheet" href="/css/nsc/reset.css?v=1.16.11.5" />
    <link rel="stylesheet" href="/css/nsc/plugin/dialogUI/dialogUI.css?v=1.16.11.5" media="all" type="text/css" >
    <link rel="stylesheet" type="text/css" media="all" href="/js/keypad/keypad.css?v=1.16.11.5" />
    <link rel="stylesheet" href="/css/nsc/login.css?v=1.16.11.5" />
    <script type="text/javascript" src="/js/nsc/jquery-1.7.min.js?v=1.16.11.5"></script>
	
    <script type="text/javascript" src="/js/common/jquery.md5.js?v=1.16.11.5"></script>
    <script type="text/javascript" src="/js/nsc/dialogUI/jquery.dialogUI.js?v=1.16.11.5"></script>
    <script type="text/javascript" src="/js/nsc/dialogUI/jquery.dragdrop.js?v=1.16.11.5"></script>
    <script language="javascript" type="text/javascript" src="/js/common/jquery.md5.js?v=1.16.11.5"></script>
	
    <script type="text/javascript" src="/js/keypad/jquery.keypad.js?v=1.16.11.5"></script>
	
    <script type="text/javascript" src="/js/nsc/login.js?v=1.16.11.5"></script>
	<script type="text/javascript" src="/images/down/swfobject.js?v=1.16.11.5"></script>
	
	<script type="text/javascript" src="/skin/main/onload.js"></script>
<script type="text/javascript" src="/skin/main/reglogin.js"></script>
    <script>
        $(function() {
            $(".browser_box div").hover(function () {
                $(this).addClass($(this).attr("class") + "_curr").stop(true).animate({
                    right: "0px",
                    width: "100px"
                }).find(".text").show();
            }, function () {
                $(this).removeClass($(this).attr("class").split(' ')[0] + "_curr").stop(true).animate({
                    right: "0px",
                    width: "0px"
                }, function () {
                    $(this).find(".text").hide();
                })
            });

            /*如果可视区域小于960进行适配*/
            function checkWidth(){
                var _ww = $(window).width(),_dw = $(document).width(),_scrollLeft;
                _scrollLeft = _dw - _ww;
                if(_ww <= 960){
                    $(document).scrollLeft(_scrollLeft);
                }
            }
            //checkWidth();
            $(window).resize(function(){
                //checkWidth();
            });

            (function(){
        var html;
        var fnCheckIes = function(v){
            var broswer = navigator.userAgent;
            var ver = parseInt(broswer.substr(broswer.indexOf("MSIE")+5,3));
            if(broswer.indexOf("MSIE") != -1){
                if(ver <= v){
                    return 1;
                }else{
                    return 2;
                }
            }else if(broswer.indexOf("Firefox") != -1){
                return "firefox";
            }else if(broswer.indexOf("rv:11") != -1){
                return 11;
            }else{
                return 3;
            }

        }
       
    
    })();
        })    
    </script>

    <!--canvas css start-->
    <style>
    html,body{
    margin:0px;
    width:100%;
    height:100%;
    overflow:hidden;
    background:#000;
    }

    #canvas{
    position:absolute;
    width:100%;
    height:100%;
    }
    </style>

    <style id="style-1-cropbar-clipper">
        /* Copyright 2014 Evernote Corporation. All rights reserved. */
       .en-markup-crop-options {
           top: 18px !important;
           left: 50% !important;
           margin-left: -100px !important;
           width: 200px !important;
           border: 2px rgba(255,255,255,.38) solid !important;
           border-radius: 4px !important;
       }

    .en-markup-crop-options div div:first-of-type {
        margin-left: 0px !important;
    }
    </style>
    <!--canvas css end-->
</head>


<body style="overflow-x: hidden;">

<canvas  id="canvas" width="1920" height="949"  style="position:absolute;z-index:0"></canvas>

<div class="browser_box">
    <div class="gg"><span class="text"><a href="http://sw.bos.baidu.com/sw-search-sp/software/fc14f1545b7/ChromeStandalone_51.0.2704.106_Setup.exe
" target="_blank">Chrome浏览器</a></span></div>
    <div class="ie"><span class="text"><a href="http://dlsw.baidu.com/sw-search-sp/soft/41/23253/IE8-WindowsXP-x86-CHS.2728888507.exe" target="_blank">IE浏览器</a></span></div>
    <div class="hf"><span class="text"><a href="http://www.firefox.com.cn/" target="_blank">Firefox浏览器</a></span></div>
</div>
<div class="main-inner" style="background:url() no-repeat center top;height:80%">
    <div  class="warp980" style="position:absolute;z-index:0;width:85%">
    <div class="box_layer" style="z-index:1">
        <div class="logo"></div>
        <div class="login">
            <div class="sj_web_box">
                <span class="sj_web_ewm1"></span>
                <div class="sj_web_ewm2"><img src="/images/nsc/login/login_sj-web_ewmimg.png?v=1.16.11.5" /><p>新版手机WAP</p></div>
            </div>

        	<h2></h2>
			<form action="/index.php/user/logined" method="post" onajax="userBeforeLogin" enter="true" call="userLogin" target="ajax">
        	<div class="inputbox">
                <i class="icon-img1"></i><input name="username" type="text" class="input-username" id="username" maxlength="32" placeholder="输入用户名">
       	    </div>
            <div class="inputbox">
                <i class="icon-img2"></i><input name="password" type="password" class="input-password password" id="password" maxlength="28" placeholder="输入登录密码">
            </div> 
            <div class="yzmbox inputbox">
                <i class="icon-img3"></i><input name="vcode" type="text" class="input-code" id="vcode" maxlength="4" placeholder="输入验证码" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')">
							<img class="validate" width="80" height="25" border="0" id="dvcode" style="cursor:pointer;" src="/index.php/user/vcode/<?=$this->time?>" title="点击刷新"  onClick="this.src='/index.php/user/vcode/'+(new Date()).getTime()"/>
            </div>
            <div class="submitbox">
			<input type="submit" onclick="$(this).closest('form').submit();return false;" class="submit-login">
			</div>
            <div class="forgotpasswd"><a href="/forgotpasswd">忘记密码？</a></div>
            <div class="servicebox">遇到问题? 联系<a href="javascript:void(0)" onclick="wjkf168();" title="在线客服">在线客服</a></div>
			</form> 
        </div>
		 <div class="checklink"><a href="/cs.html">自动切换最优线路</a></div><!-- st=0 则不测速 -->
    </div>
</div></div>
    
 <!--Minkey 注释app下载
<div class="login_main clearfix"><div class="warp980">

<div class="air_box">
<div class="air_box_t">
	<div class="airflash" id="air_top">
    	<div id="flashcontent" style=" width:220px; height:140px; margin:0 auto;"></div>

    </div>
    <dl class="download-line">
    	<dt>手动下载地址</dt>
        <dd><a href="javascript:void(0)" onclick="jjtc();">线路1</a></dd>
        <dd><a href="javascript:void(0)" onclick="jjtc();">线路2</a></dd>
        <dd><a href="javascript:void(0)" onclick="jjtc();">线路3</a></dd>
    </dl>
</div>
<div class="air_box_b">
<p class="line_hint">线路失效？请<a href="javascript:void(0)" onclick="wjkf168();" title="在线客服">联系客服</a></p>
<a href="#" onclick="jjtc();" class="adobe_download">下载Adobe Air</a></div>
</div>

<div class="same_box phone_box">
	<div class="left">
    <h3>安卓APP</h3>
    <p>下载地址：</p><a href="https://dn-scmobile.qbox.me/sincai.apk"  class="icon-Android">Android</a>
    </div>

    <div class="img"><img src="/images/nsc/login/nsc_login_tdc-phone.png?v=1.16.11.5" /></div>
</div>

<div class="same_box pt_box">
	<div class="left">
    <h3>苹果ISO</h3>
    <p>下载地址：</p><a href="https://dn-scmobile.qbox.me/olsincai.ipa"  class="icon-iPhone">iPhone</a>
    </div>
    <div class="img"><img src="/images/nsc/login/nsc_login_tdc-pt.png?v=1.16.11.5" /></div>
</div>

</div></div>
    
Minkey 注释app下载-->  
<div class="login_footer"  style="position:absolute;z-index:1"><div class="warp980">
<div class="img"><img src="/images/nsc/login/nsc_login_footer-certificate.png?v=1.16.11.5" /></div>
<div class="clearfix"><p class="t-left">浏览器建议：首选为Google浏览器，其次为火狐和IE9或IE10浏览器<br />分辨率建议：使用1024×768以上的分辨率</p>
<p class="t-right">未满18周岁禁止购买<br />Copyright © SinCai 2010-2016  财缘娱乐 版权所有</p></div>
</div></div>




<script type="text/javascript">
$(function(){
    $(".sj_web_ewm1").hover(function(){
        $(this).hide();
        $(".sj_web_ewm2").show();
    },function(){

    });

    $(".sj_web_ewm2").hover(function(){

    },function(){
        $(this).hide();
        $(".sj_web_ewm1").show();
    });
})
</script>
<script type='text/javascript'>
 function wjkf168(){
	<?php if($this->settings['kefuStatus']){ ?>
	var newWin=window.open("<?=$this->settings['kefuGG']?>","","height=600, width=800, top=0, left=0,toolbar=no, menubar=no, scrollbars=no, resizable=no, location=n o, status=no");
	if(!newWin||!newWin.open||newWin.closed){newWin=window.open('about:blank');}else{return false;}
	<?php }else{?>
	$.alert("客服系统维护中");
	<?php }?>
	return false;
 }
function qqkf(){
	<?php if($this->settings['qqkefuStatus']){ ?>
	var newWin=window.open("http://wpa.qq.com/msgrd?uin=<?=$this->settings['qqkefuGG']?>&site=qq&menu=yes","","height=600, width=800, top=0, left=0,toolbar=no, menubar=no, scrollbars=no, resizable=no, location=n o, status=no");
	if(!newWin||!newWin.open||newWin.closed){newWin=window.open('about:blank');}else{return false;}
	<?php }else{?>
	$.alert("客服系统维护中");
	<?php }?>
	return false;
}
</script> 
</body>
</html>


<!-- h5 canvas start -->
<script>
    function project3D(x,y,z,vars){

        var p,d;
        x-=vars.camX;
        y-=vars.camY-8;
        z-=vars.camZ;
        p=Math.atan2(x,z);
        d=Math.sqrt(x*x+z*z);
        x=Math.sin(p-vars.yaw)*d;
        z=Math.cos(p-vars.yaw)*d;
        p=Math.atan2(y,z);
        d=Math.sqrt(y*y+z*z);
        y=Math.sin(p-vars.pitch)*d;
        z=Math.cos(p-vars.pitch)*d;
        var rx1=-1000;
        var ry1=1;
        var rx2=1000;
        var ry2=1;
        var rx3=0;
        var ry3=0;
        var rx4=x;
        var ry4=z;
        var uc=(ry4-ry3)*(rx2-rx1)-(rx4-rx3)*(ry2-ry1);
        var ua=((rx4-rx3)*(ry1-ry3)-(ry4-ry3)*(rx1-rx3))/uc;
        var ub=((rx2-rx1)*(ry1-ry3)-(ry2-ry1)*(rx1-rx3))/uc;
        if(!z)z=0.000000001;
        if(ua>0&&ua<1&&ub>0&&ub<1){
            return {
                x:vars.cx+(rx1+ua*(rx2-rx1))*vars.scale,
                y:vars.cy+y/z*vars.scale,
                d:(x*x+y*y+z*z)
            };
        }else{
            return { d:-1 };
        }
    }


    function elevation(x,y,z){

        var dist = Math.sqrt(x*x+y*y+z*z);
        if(dist && z/dist>=-1 && z/dist <=1) return Math.acos(z / dist);
        return 0.00000001;
    }


    function rgb(col){

        col += 0.000001;
        var r = parseInt((0.5+Math.sin(col)*0.5)*16);
        var g = parseInt((0.5+Math.cos(col)*0.5)*16);
        var b = parseInt((0.5-Math.sin(col)*0.5)*16);
        return "#"+r.toString(16)+g.toString(16)+b.toString(16);
    }


    function interpolateColors(RGB1,RGB2,degree){

        var w2=degree;
        var w1=1-w2;
        return [w1*RGB1[0]+w2*RGB2[0],w1*RGB1[1]+w2*RGB2[1],w1*RGB1[2]+w2*RGB2[2]];
    }


    function rgbArray(col){

        col += 0.000001;
        var r = parseInt((0.5+Math.sin(col)*0.5)*256);
        var g = parseInt((0.5+Math.cos(col)*0.5)*256);
        var b = parseInt((0.5-Math.sin(col)*0.5)*256);
        return [r, g, b];
    }


    function colorString(arr){

        var r = parseInt(arr[0]);
        var g = parseInt(arr[1]);
        var b = parseInt(arr[2]);
        return "#"+("0" + r.toString(16) ).slice (-2)+("0" + g.toString(16) ).slice (-2)+("0" + b.toString(16) ).slice (-2);
    }


    function process(vars){
        if(vars.points.length<vars.initParticles) for(var i=0;i<5;++i) spawnParticle(vars);
        var p,d,t;

        p = Math.atan2(vars.camX, vars.camZ);
        d = Math.sqrt(vars.camX * vars.camX + vars.camZ * vars.camZ);
        d -= Math.sin(vars.frameNo / 80) / 25;
        t = Math.cos(vars.frameNo / 300) / 165;
        vars.camX = Math.sin(p + t) * d;
        vars.camZ = Math.cos(p + t) * d;
        vars.camY = -Math.sin(vars.frameNo / 220) * 15;
        vars.yaw = Math.PI + p + t;
        vars.pitch = elevation(vars.camX, vars.camZ, vars.camY) - Math.PI / 2;

        var t;
        for(var i=0;i<vars.points.length;++i){

            x=vars.points[i].x;
            y=vars.points[i].y;
            z=vars.points[i].z;
            d=Math.sqrt(x*x+z*z)/1.0075;
            t=.1/(1+d*d/5);
            p=Math.atan2(x,z)+t;
            vars.points[i].x=Math.sin(p)*d;
            vars.points[i].z=Math.cos(p)*d;
            vars.points[i].y+=vars.points[i].vy*t*((Math.sqrt(vars.distributionRadius)-d)*2);
            if(vars.points[i].y>vars.vortexHeight/2 || d<.25){
                vars.points.splice(i,1);
                spawnParticle(vars);
            }
        }
    }

    function drawFloor(vars){

        var x,y,z,d,point,a;
        for (var i = -25; i <= 25; i += 1) {
            for (var j = -25; j <= 25; j += 1) {
                x = i*2;
                z = j*2;
                y = vars.floor;
                d = Math.sqrt(x * x + z * z);
                point = project3D(x, y-d*d/85, z, vars);
                if (point.d != -1) {
                    size = 1 + 15000 / (1 + point.d);
                    a = 0.15 - Math.pow(d / 50, 4) * 0.15;
                    if (a > 0) {
                        vars.ctx.fillStyle = colorString(interpolateColors(rgbArray(d/26-vars.frameNo/40),[0,128,32],.5+Math.sin(d/6-vars.frameNo/8)/2));
                        vars.ctx.globalAlpha = a;
                        vars.ctx.fillRect(point.x-size/2,point.y-size/2,size,size);
                    }
                }
            }
        }
        vars.ctx.fillStyle = "#82f";
        for (var i = -25; i <= 25; i += 1) {
            for (var j = -25; j <= 25; j += 1) {
                x = i*2;
                z = j*2;
                y = -vars.floor;
                d = Math.sqrt(x * x + z * z);
                point = project3D(x, y+d*d/85, z, vars);
                if (point.d != -1) {
                    size = 1 + 15000 / (1 + point.d);
                    a = 0.15 - Math.pow(d / 50, 4) * 0.15;
                    if (a > 0) {
                        vars.ctx.fillStyle = colorString(interpolateColors(rgbArray(-d/26-vars.frameNo/40),[32,0,128],.5+Math.sin(-d/6-vars.frameNo/8)/2));
                        vars.ctx.globalAlpha = a;
                        vars.ctx.fillRect(point.x-size/2,point.y-size/2,size,size);
                    }
                }
            }
        }
    }

    function sortFunction(a,b){
        return b.dist-a.dist;
    }

    function draw(vars){

        vars.ctx.globalAlpha=.15;
        vars.ctx.fillStyle="#000";
        vars.ctx.fillRect(0, 0, canvas.width, canvas.height);

        drawFloor(vars);

        var point,x,y,z,a;
        for(var i=0;i<vars.points.length;++i){
            x=vars.points[i].x;
            y=vars.points[i].y;
            z=vars.points[i].z;
            point=project3D(x,y,z,vars);
            if(point.d != -1){
                vars.points[i].dist=point.d;
                size=1+vars.points[i].radius/(1+point.d);
                d=Math.abs(vars.points[i].y);
                a = .8 - Math.pow(d / (vars.vortexHeight/2), 1000) * .8;
                vars.ctx.globalAlpha=a>=0&&a<=1?a:0;
                vars.ctx.fillStyle=rgb(vars.points[i].color);
                if(point.x>-1&&point.x<vars.canvas.width&&point.y>-1&&point.y<vars.canvas.height)vars.ctx.fillRect(point.x-size/2,point.y-size/2,size,size);
            }
        }
        vars.points.sort(sortFunction);
    }


    function spawnParticle(vars){

        var p,ls;
        pt={};
        p=Math.PI*2*Math.random();
        ls=Math.sqrt(Math.random()*vars.distributionRadius);
        pt.x=Math.sin(p)*ls;
        pt.y=-vars.vortexHeight/2;
        pt.vy=vars.initV/20+Math.random()*vars.initV;
        pt.z=Math.cos(p)*ls;
        pt.radius=200+800*Math.random();
        pt.color=pt.radius/1000+vars.frameNo/250;
        vars.points.push(pt);
    }

    function frame(vars) {

        if(vars === undefined){
            var vars={};
            vars.canvas = document.querySelector("canvas");
            vars.ctx = vars.canvas.getContext("2d");
            vars.canvas.width = document.body.clientWidth;
            vars.canvas.height = document.body.clientHeight;
            window.addEventListener("resize", function(){
                vars.canvas.width = document.body.clientWidth;
                vars.canvas.height = document.body.clientHeight;
                vars.cx=vars.canvas.width/2;
                vars.cy=vars.canvas.height/2;
            }, true);
            vars.frameNo=0;

            vars.camX = 0;
            vars.camY = 0;
            vars.camZ = -14;
            vars.pitch = elevation(vars.camX, vars.camZ, vars.camY) - Math.PI / 2;
            vars.yaw = 0;
            vars.cx=vars.canvas.width/2;
            vars.cy=vars.canvas.height/2;
            vars.bounding=10;
            vars.scale=500;
            vars.floor=26.5;

            vars.points=[];
            vars.initParticles=700;
            vars.initV=.01;
            vars.distributionRadius=800;
            vars.vortexHeight=25;
        }

        vars.frameNo++;
        requestAnimationFrame(function() {
            frame(vars);
        });

        process(vars);
        draw(vars);
    }
    frame();
</script>
<!-- h5 canvas end -->