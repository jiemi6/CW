<?PHP
require('ymf_config.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>成功返回</title>
</head>

<body>
<?PHP
$orderid=$_POST['orderid'];
$amount=sprintf("%1\$.2f",$_POST['amount']); 
$sysorderid=$_POST['sysorderid'];
$systime=$_POST['systime'];
$subject=$_POST['subject'];
$sign=$_POST['sign'];
$md=md5("parter=".$parter."&orderid=".$orderid."&money=".$amount.$key1);
if($sign==$md){
?>
充值成功！
<?php

}
?>
