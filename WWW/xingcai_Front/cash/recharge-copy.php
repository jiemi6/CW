<!--//复制程序 flash+js------end-->
<link rel="stylesheet" type="text/css" href="/newskin/css/game-index.css">
<link rel="stylesheet" type="text/css" href="/newskin/css/game-mian.css">
<link rel="stylesheet" type="text/css" href="/newskin/css/manager.css">
<link rel="stylesheet" href="/css/nsc/chong-list.css?v=1.16.11.5" />


<?php
$this->freshSession();
$mBankId=$args[0]['mBankId'];
$sql="select mb.*, b.name bankName, b.logo bankLogo, b.home bankHome from {$this->prename}sysadmin_bank mb, {$this->prename}bank_list b where b.isDelete=0 and mb.id=$mBankId and mb.bankId=b.id";
$memberBank=$this->getRow($sql);
if($memberBank['bankId']==12){
?>
<!--左边栏body-->
<style type="text/css">
<!--
.banklogo input{
height:15px; width:15px
}
.banklogo{}
-->
</style>

<table width="100%" border="0" cellspacing="1" cellpadding="4" class='table_b'>
    <tr class='table_b_th'>

    </tr>
     <tr height=25 class='table_b_tr_b'>
     
      <th scope="col" style="background: #FFFFFF;color: #000000;font-size: 15px;border:1px solid #e9e9e9;width: 50%;height: 50px;text-indent: 16px;">充值金额：<?=$args[0]['amount']?></th>
      <th scope="col" style="background: #fff;height:55px;width: 50%;color: #000;font-size: 15px;border:1px solid #e9e9e9">充值编号 ：<?=$args[0]['rechargeId']?></th>
   
        </td> 
    </tr>
	<tr height=25 class='table_b_tr_h'>
    <td colspan="2" align="right" class="copyss">
	<form action="/591yzf/payto.php" method="post" name="a" target="_blank" >

	<input name="amount" type="hidden" value="<?=$args[0]['amount']?>" />
	<input name="rechargeId" type="hidden" value="<?=$args[0]['rechargeId']?>" />
	<input name="username" type="hidden" value="<?=$this->user['username']?>" />
		
    <input name="orderNo" type="hidden" value="<?=$args[0]['rechargeId']?>" />
    <input name="amt" type="hidden" value="<?=$args[0]['amount']?>" />
    <input name="attach" type="hidden" value="<?=$this->user['username']?>" />

    <input name="p2_Order" type="hidden" value="<?=$args[0]['rechargeId']?>" />
    <input name="p3_Amt" type="hidden" value="<?=$args[0]['amount']?>" />
    <input name="pa_MP" type="hidden" value="<?=$this->user['username']?>" />
<table   border="0" cellspacing="1" cellpadding="4" class='table_b' width="100%">
    <tr height=25 class='table_b_tr_b'>

      <td align="left">
	  <SCRIPT language=Javascript type=text/javascript>
	    function SelectBank(n) {
           document.getElementById("bank" + n).checked = true;
	    }
	  </SCRIPT>
	  <table  border="0" width="100%" align="left" cellpadding="0" cellspacing="0"   >
        <tr>
          <td><input type="radio" style="width:15px;" name="currencytype" id="bank1" value="1100" checked="checked"/></td>
          <td><div align="left"><a href="javascript:SelectBank(1);"><img src="/mpay/imagesc/zggsyh.gif"  alt="中国工商银行" /></a></div></td>
          <td><input type="radio" style="width:15px;" name="currencytype"  id="bank14" value="1121"></td>
          <td><div align="left"><a href="javascript:SelectBank(14);"><img src="/mpay/imagesc/payh.gif"  alt="中国平安银行" /></a></div></td>
          <td><input type="radio" style="width:15px;" name="currencytype"  id="bank2" value="1102"></td>
          <td><div align="left"><a href="javascript:SelectBank(2);"><img src="/mpay/imagesc/zsyh.gif"  alt="中国招商银行" /></a></div></td>
          <td><input type="radio" style="width:15px;" name="currencytype"  id="bank3" value="1110"></td>
          <td><div align="left"><a href="javascript:SelectBank(3);"><img src="/mpay/imagesc/zgmsyh.gif"  alt="民生银行" /></a></div></td>	  
        </tr>
        <tr>
          <td><input type="radio" style="width:15px;" name="currencytype" id="bank4" value="1101"></td>
          <td><div align="left"><a href="javascript:SelectBank(4);"><img src="/mpay/imagesc/zgnyyh.gif"  alt="中国农业银行" /></a></div></td>
          <td><input type="radio" style="width:15px;" name="currencytype"  id="bank5" value="1111"></td>
          <td><div align="left"><a href="javascript:SelectBank(5);"><img src="/mpay/imagesc/hxyh.gif" id="bank1" alt="中国华夏银行" /></a></div></td>
          <td><input type="radio" style="width:15px;" name="currencytype" id="bank6" value="1106"></td>
          <td width="1"><div align="left"><a href="javascript:SelectBank(6);"><img src="/mpay/imagesc/zgjsyh.gif"  alt="中国建设银行" /></a></div></td>
          <td><input type="radio" style="width:15px;" name="currencytype"   id="bank7" value="1107"></td>
          <td><div align="left"><a href="javascript:SelectBank(7);"><img src="/mpay/imagesc/zgyh.gif"  id="bank1" alt="中国银行" /></a></div></td>
        </tr>
        <tr>
          <td><input type="radio" style="width:15px;" name="currencytype"  id="bank8" value="1108"></td>
          <td><div align="left"><a href="javascript:SelectBank(8);"><img src="/mpay/imagesc/jtyh.gif"  alt="中国交通银行" /></a></div></td>
          <td><input type="radio" style="width:15px;" name="currencytype" id="bank9" value="1112"></td>
          <td><div align="left"><a href="javascript:SelectBank(9);"><img src="/mpay/imagesc/zggdyh.gif"  alt="中国光大银行" /></a></div></td>
          <td><input type="radio" style="width:15px;" name="currencytype" id="bank10" value="1103"></td>
          <td><div align="left"><a href="javascript:SelectBank(10);"><img src="/mpay/imagesc/xyyh.gif"  alt="中国兴业银行" /></a></div></td>
          <td><input type="radio" style="width:15px;" name="currencytype"  id="bank15" value="1116"></td>
          <td><div align="left"><a href="javascript:SelectBank(15);"><img src="/mpay/imagesc/pdfzyh.gif"  alt="中国上海浦东发展银行" /></a></div></td>
        </tr>
        <tr>
          <td><input type="radio" style="width:15px;" name="currencytype" id="bank11" value="1114"></td>
          <td><div align="left"><a href="javascript:SelectBank(11);"><img src="/mpay/imagesc/gdfzyh.gif"  alt="广东发展银行" /></a></div></td>
          <td><input type="radio" style="width:15px;" name="currencytype" id="bank12" value="1119"></td>
          <td><div align="left"><a href="javascript:SelectBank(12);"><img src="/mpay/imagesc/yzcxyh.gif"  alt="中国邮政银行" /></a></div></td>
          <td><input type="radio" style="width:15px;" name="currencytype" id="bank13" value="1104" /></td>
          <td><div align="left"><a href="javascript:SelectBank(13);"><img src="/mpay/imagesc/zxyh.gif"  alt="中国中信银行" /></a></div></td>
          <td><input type="radio" style="width:15px;" name="currencytype" id="bank16" value="1" /></td>
          <td><div align="left"><a href="javascript:SelectBank(16);"><img src="/mpay/imagesc/mobaopay.gif"  alt="其他银联支付网银" /></a></div></td>
        </tr>
      </table>
	  </td>
    </tr>
    <tr height=25 class='table_b_tr_b'>
      <td align="right" style="font-weight:bold;"></td>
      <td align="left" ><input name="addmenber" type='submit' style="width:180px; height:50px; margin-left:45%" class="button" value="确认支付" /></td> 
    </tr>
    </table>
</form>
</td>
</tr>
</table>
<input type="hidden" name="currencytype" value="1001">
	<input name="amount" type="hidden" value="<?=$args[0]['amount']?>" />
	<input name="rechargeId" type="hidden" value="<?=$args[0]['rechargeId']?>" />
	<input name="username" type="hidden" value="<?=$this->user['username']?>" />
		
    <input name="orderNo" type="hidden" value="<?=$args[0]['rechargeId']?>" />
    <input name="amt" type="hidden" value="<?=$args[0]['amount']?>" />
    <input name="attach" type="hidden" value="<?=$this->user['username']?>" />
	<!--p id="linkTip" style="color:#f00; margin-top:5px; position:absolute; top:55px;">*注意：在线充值付款成功后，请等待30s后再关闭充值的窗口，以防资金不到账。若付款后未到账，请联系客服。</p-->
</div>
</div>
</form>
</div>

<script type="text/javascript">
		//radio选择样式
        $(".switch_choose input[type=radio]").click(function(){
	        if($(".switch_choose input[type=radio]:checked").val()){
	       		$(this).next('label').addClass('active').siblings().removeClass('active');
	       	}
        })
</script>
 <!--左边栏body结束-----------------------支付宝------------------------------------------------------------->
<?
}else if($memberBank['bankId']==2){
?>
<!--左边栏body-->
<style type="text/css">
<!--
.banklogo input{
height:15px; width:15px
}
.banklogo{}
-->
</style>

<table width="100%" border="0" cellspacing="1" cellpadding="4" class='table_b'>
    <tr height=25 class='table_b_tr_b' >
    
	<th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">充值类型：<img id="bank-type-icon" class="bankimg" src="/<?=$memberBank['bankLogo']?>" title="<?=$memberBank['bankName']?>" /></th>
    <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">充值金额：<?=$args[0]['amount']?></th>
    <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">充值编号：<?=$args[0]['rechargeId']?></th>
    </tr>
	<table width="100%" border="0" cellspacing="1" cellpadding="4" class="table_b">    
	<tbody><tr height="25" class="table_b_tr_h">
    <td colspan="2" align="center" class="copyss">
	<form action="/591yzf/payto.php" method="post" name="a" target="_blank" > 
	<input name="submit" type="submit" style="margin-top: 50px;" class="formNext" value="确认支付">
<input type="hidden" name="currencytype" value="1001">
	<input name="amount" type="hidden" value="<?=$args[0]['amount']?>" />
	<input name="rechargeId" type="hidden" value="<?=$args[0]['rechargeId']?>" />
	<input name="username" type="hidden" value="<?=$this->user['username']?>" />
		
    <input name="orderNo" type="hidden" value="<?=$args[0]['rechargeId']?>" />
    <input name="amt" type="hidden" value="<?=$args[0]['amount']?>" />
    <input name="attach" type="hidden" value="<?=$this->user['username']?>" />
    </tr>
    </table>
</form>
</td>
</tr>
</table>
 <!--左边栏body结束-------------------------------------------支付宝结束--------------------------------------------------------->
 
 <!---------------------------------------------微信支付--------------------------------------------------------->
<? }else if($memberBank['bankId']==20){
?>
<!--左边栏body-->
<style type="text/css">
<!--
.banklogo input{
height:15px; width:15px
}
.banklogo{}
-->
</style>

<table width="100%" border="0" cellspacing="1" cellpadding="4" class='table_b'>
    <tr height=25 class='table_b_tr_b' >
    
	<th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">充值类型：<img id="bank-type-icon" class="bankimg" src="/<?=$memberBank['bankLogo']?>" title="<?=$memberBank['bankName']?>" /></th>
    <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">充值金额：<?=$args[0]['amount']?></th>
    <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">充值编号：<?=$args[0]['rechargeId']?></th>
    </tr>
	<table width="100%" border="0" cellspacing="1" cellpadding="4" class="table_b">    
	<tbody><tr height="25" class="table_b_tr_h">
    <td colspan="2" align="center" class="copyss">
	<form action="/591yzf/payto.php" method="post" name="a" target="_blank" >
	<input name="submit" type="submit" style="margin-top: 50px;" class="formNext" value="确认支付">
<input type="hidden" name="currencytype" value="1003">
	<input name="amount" type="hidden" value="<?=$args[0]['amount']?>" />
	<input name="rechargeId" type="hidden" value="<?=$args[0]['rechargeId']?>" />
	<input name="username" type="hidden" value="<?=$this->user['username']?>" />
		
    <input name="orderNo" type="hidden" value="<?=$args[0]['rechargeId']?>" />
    <input name="amt" type="hidden" value="<?=$args[0]['amount']?>" />
    <input name="attach" type="hidden" value="<?=$this->user['username']?>" />
    </tr>
    </table>
</form>
</td>
</tr>
</table>
 <!---------------------------------------------微信支付结束--------------------------------------------------------->
 
 <!---------------------------------------------财付通--------------------------------------------------------->
<? }else if($memberBank['bankId']==3){
?>
<!--左边栏body-->
<style type="text/css">
<!--
.banklogo input{
height:15px; width:15px
}
.banklogo{}
-->
</style>
 <table width="100%" height="55" align="center">
                  <tr>
                  <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">1.选择银行并输入金额</th>
                  <th scope="col" style="background: #f5f5f5;height:55px;color: #35aaff;font-size: 15px;border:1px solid #e9e9e9">2.确认充值信息</th>
                  <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">3.完成充值</th>

                  </tr>
                  </table>
<table width="100%" border="0" cellspacing="1" cellpadding="4" class='table_b'>
    <tr height=25 class='table_b_tr_b' >
    
	<th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">充值类型：<img id="bank-type-icon" class="bankimg" src="/<?=$memberBank['bankLogo']?>" title="<?=$memberBank['bankName']?>" /></th>
    <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">充值金额：<?=$args[0]['amount']?></th>
    <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">充值编号：<?=$args[0]['rechargeId']?></th>
    </tr>
	<table width="100%" border="0" cellspacing="1" cellpadding="4" class="table_b">    
	<tbody><tr height="25" class="table_b_tr_h">
    <td colspan="2" align="center" class="copyss">
	<form action="/591yzf/payto.php" method="post" name="a" target="_blank" > 
	<input name="submit" type="submit" style="margin-top: 50px;" class="button" value="确认支付">
	<input name="amount" type="hidden" value="<?=$args[0]['amount']?>" />
	<input name="rechargeId" type="hidden" value="<?=$args[0]['rechargeId']?>" />
	<input name="username" type="hidden" value="<?=$this->user['username']?>" />
		
    <input name="orderNo" type="hidden" value="<?=$args[0]['rechargeId']?>" />
    <input name="amt" type="hidden" value="<?=$args[0]['amount']?>" />
    <input name="attach" type="hidden" value="<?=$this->user['username']?>" />

    <input name="p2_Order" type="hidden" value="<?=$args[0]['rechargeId']?>" />
    <input name="p3_Amt" type="hidden" value="<?=$args[0]['amount']?>" />
    <input name="pa_MP" type="hidden" value="<?=$this->user['username']?>" />
    </tr>
    </table>
</form>
</td>
</tr>
</table>
 <!---------------------------------------------财付通结束--------------------------------------------------------->
 <!---------------------------------------------微信手动支付--------------------------------------------------------->
 <? }else if($memberBank['bankId']==21){
?>
 <table width="100%" border="0" cellspacing="0" cellpadding="0" class="formTable">
              <tbody><tr>
                                
                 </tr>
    <tr>
      <td align="right" style="width:20%;">充值信息：</td>
    </tr>
	<tr>
      <td align="right">收款户名：</td>
      <td><input id="bank-username" readonly value="<?=$memberBank["username"]?>" /></td> 
    </tr>
    <tr>
      <td align="right">充值金额：</td>
      <td><input id="recharg-amount" readonly value="<?=$args[0]['amount']?>" /></td>
    </tr>
	<tr>
      <td align="right">充值编号：</td>
      <td><input id="username" readonly value="<?=$args[0]['rechargeId']?>" /></td>  
    </tr>
    <tr>
      <td align="right">扫码支付：</td>
	  <td>
     <div class="qrimage-wrap white b-a text-center">
	
	 <img id="qrimage" src="/images/wx.png">
	 </div>
	 </td>
	 
	 
    </tr>

<!--左边栏body结束-->

<tr>
<div class="tips">
	<dl>
        <dt>充值说明：</dt>
        <dd>1.每次"充值编号"均不相同,务必将"充值编号"正确复制填写到引号汇款页面的"说明"栏目中;</dd>
        <dd>2.帐号不固定，转帐前请仔细核对该帐号;</dd>
        <dd>3.充值金额与转账金额不符，充值将无法到账;</dd>
        <dd>4.转账后如10分钟未到账，请联系客服，告知您的充值编号和您的充值金额。</dd>
		<dd>5.支付宝，微信，财付通，手动充值可忽略以上几点。</dd>
    </dl>
</div>
</tr>
</table>  
<!---------------------------------------------支付宝手动支付--------------------------------------------------------->
 <? }else if($memberBank['bankId']==22){
?>
 <table width="100%" border="0" cellspacing="0" cellpadding="0" class="formTable">
              <tbody><tr>
                                
                 </tr>
    <tr>
      <td align="right" style="width:20%;">充值信息：</td>
    </tr>
	<tr>
      <td align="right">收款户名：</td>
      <td><input id="bank-username" readonly value="<?=$memberBank["username"]?>"  style="width:200px;"/></td>
    </tr>
  <tr>
      <td align="right">收款银行卡：</td>
      <td><input id="bank-username" readonly value="<?=$memberBank["account"]?>" style="width:200px;"/></td>
  </tr>
    <tr>
      <td align="right">充值金额：</td>
      <td><input id="recharg-amount" readonly value="<?=$args[0]['amount']?>" style="width:200px;"/></td>
    </tr>
	<tr>
      <td align="right">充值编号：</td>
      <td><input id="username" readonly value="<?=$args[0]['rechargeId']?>" style="width:200px;"/></td>
    </tr>
    <tr>
      <td align="right">支付宝转账：</td>
	  <td>
     <div class="qrimage-wrap white b-a text-center">
	
	 <img id="qrimage" src="/images/zfb.png">
	 </div>
	 </td>
	 
	 
    </tr>

<!--左边栏body结束-->

<tr>
<div class="tips">
	<dl>
        <dt>充值说明：</dt>
        <dd>1.每次"充值编号"均不相同,务必将"充值编号"正确复制填写到引号汇款页面的"说明"栏目中;</dd>
        <dd>2.帐号不固定，转帐前请仔细核对该帐号;</dd>
        <dd>3.充值金额与转账金额不符，充值将无法到账;</dd>
        <dd>4.转账后如10分钟未到账，请联系客服，告知您的充值编号和您的充值金额。</dd>
		<dd>5.支付宝，微信，财付通，手动充值可忽略以上几点。</dd>
    </dl>
</div>
</tr>
</table>  

 
 
 
<? }else{
?>
<!--左边栏body-->
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="formTable">
              <tbody><tr>
                                
                 </tr>
    <tr>
      <td align="right" style="width:20%;">充值信息：</td>
    </tr>
    
    <tr>
      <td align="right">充值类型：</td>
      <td><img id="bank-type-icon" class="bankimg" src="/<?=$memberBank['bankLogo']?>" title="<?=$memberBank['bankName']?>" style="height:3.74rem;"/>
            <a id="bank-link" target="_blank" href="<?=$memberBank['bankHome']?>" class="spn11" style="margin-left:50px;">进入银行网站>></a>
      </td> 
    </tr>
	<tr>
      <td align="right">收款户名：</td>
      <td><input id="bank-username" readonly value="<?=$memberBank["username"]?>" /></td> 
    </tr>
    <tr>
      <td align="right">收款账号：</td>
      <td><input id="bank-account" readonly value="<?=$memberBank["account"]?>" /></td> 
    </tr>
     <tr>
      <td align="right">充值金额：</td>
      <td><input id="recharg-amount" readonly value="<?=$args[0]['amount']?>" />*网银充值金额必须与网站填写金额一致方能到账！</td>
    </tr>
     <tr>
      <td align="right">充值编号：</td>
      <td><input id="username" readonly value="<?=$args[0]['rechargeId']?>" />
     *网银充值请务必将此编号填写到汇款“说明”里！</td>  
    </tr>
<!--左边栏body结束-->

<tr>
<div class="tips">
	<dl>
        <dt>充值说明：</dt>
        <dd>1.每次"充值编号"均不相同,务必将"充值编号"正确复制填写到引号汇款页面的"说明"栏目中;</dd>
        <dd>2.帐号不固定，转帐前请仔细核对该帐号;</dd>
        <dd>3.充值金额与转账金额不符，充值将无法到账;</dd>
        <dd>4.转账后如10分钟未到账，请联系客服，告知您的充值编号和您的充值金额。</dd>
    </dl>
</div>
</tr>
</table> 
<?php }?>