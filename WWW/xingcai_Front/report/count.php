<?php $this->display('inc_daohang.php'); ?>


<div id="nsc_subContent" style="border:0">
<script type="text/javascript">

	$(function() {
		$( ".menus-li li").click(function(){
            $( ".menus-li li").removeClass("on");
            $(this).addClass("on");
            $("#tabs-1,#tabs-2").hide();
            $("#tabs-"+($(this).index()+1)).show();
        });
	})
</script>

<div id="siderbar">
<ul class="list clearfix">
<li ><a href="/index.php/safe/info" >绑定卡号</a></li>
<li ><a href="/index.php/safe/passwd" >密码修改</a></li>
<li ><a href="/index.php/record/search" >投注记录</a></li>
<li ><a href="/index.php/report/coin" >帐变记录</a></li>
<li class="current"><a href="/index.php/report/count" >盈亏报表</a></li>
<li ><a href="/index.php/cash/rechargeLog" >充值记录</a></li>
<li ><a href="/index.php/cash/toCashLog" >提现记录</a></li>
<li ><a href="/index.php/user/nickname" >更改称昵</a></li>
<li ><a href="/index.php/box/receive" >消息管理</a></li>
</ul>
</div>

<link rel="stylesheet" href="/css/nsc/reset.css?v=1.16.11.5" />
<link rel="stylesheet" href="/css/nsc/list.css?v=1.16.11.5" />
<link rel="stylesheet" href="/css/nsc/activity.css?v=1.16.11.5" />

</head>
<body>
<div id="subContent_bet_re">

<style>
    .task_div{right:50px;}
</style>
<script type="text/javascript">
$(function(){
	
	$('.chazhao').click(function(){
		$(this).closest('form').submit();
	});

	$('.bottompage a[href]').live('click', function(){
		$('.biao-cont').load($(this).attr('href'));
		return false;
	});
});
function searchData(err, data){
	if(err){
		alert(err);
	}else{
		$('.biao-cont').html(data);
	}
}
</script>
<div id="contentBox">
     <form action="/index.php/report/countSearch" target="ajax" call="searchData" dataType="html">
      
        <div id="searchBox" class="re">
        	<div class="inlineBlock">
            	<label>盈亏时间：</label><input type="text" class="input150" value="<?= $this->iff($_REQUEST['fromTime'], $_REQUEST['fromTime'], date('Y-m-d H:i', $GLOBALS['fromTime'])) ?>" name="fromTime" id="datetimepicker" /> <span class="image"></span>
            </div>
            <label>至</label>
            <div class="inlineBlock">
            	<input type="text" class="input150" value="<?= $this->iff($_REQUEST['toTime'], $_REQUEST['toTime'], date('Y-m-d H:i', $GLOBALS['toTime'])) ?>" id="datetimepicker4" name="toTime" /> <span class="image" ></span>
            </div>
          <input type="button" value="查询" class="formCheck chazhao" /></div>
    </form>
    </div>
  <div class="biao-cont">
    	<!--下注列表-->
        <?php $this->display('report/count-list.php'); ?>
        <!--下注列表 end -->
    </div>
<?php $this->display('inc_root.php'); ?>

</div></div></div></div></div>
<?php $this->display('inc_che.php'); ?>

 </body>
 </html>