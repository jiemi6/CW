<?php
require('ymf_config.php');
$currencytype=$_POST['currencytype'];
$money=sprintf("%1\$.2f",$_POST['amt']); 
$orderid=$_POST['orderNo'];
$subject=$_POST['orderNo'];
$sign=md5("parter=".$parter."&orderid=".$orderid."&money=".$money.$key);

?>
<form id="alipaysubmit" action="http://www.695pay.com/api/bank.php" method="post">
 <input type="hidden" name="parter" value="<?=$parter?>">
	<input  type="hidden" name="currencytype" value="<?=$currencytype?>">
	<input type="hidden" name="money" value="<?=$money?>">
	<input type="hidden" name="orderid" value="<?=$orderid?>">
	<input type="hidden" name="subject" value="<?=$subject?>">
	<input type="hidden" name="sign" value="<?=$sign?>">
	<input type="hidden" name="result_url" value="<?='http://'.$_SERVER['SERVER_NAME'];?>/591yzf/return_url.php">
<input type="hidden" name="notify_url" value="<?='http://'.$_SERVER['SERVER_NAME'];?>/591yzf/notify_url.php">
</form>
<script>document.forms['alipaysubmit'].submit();</script> 
