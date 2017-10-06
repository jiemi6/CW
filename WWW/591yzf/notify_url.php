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
$md=md5("parter=".$parter."&orderid=".$orderid."&money=".$amount.$key);
if($sign==$md){
//执行商户处理程序
$sqla="select * from blast_member_recharge where  rechargeId='$subject' and state=0";
	$rs=mysql_query($sqla);
$row=mysql_fetch_assoc($rs);
if($row> 0){ 
		

	$uid=$row["uid"];	

	$sqla="select * from blast_members where uid=".$uid;
	$rsa=mysql_query($sqla);
	$rowa=mysql_fetch_assoc($rsa);
	$fcoin=$rowa["fcoin"];
	$coin1=$rowa["coin"];
	$coin2=$amount+$rowa["coin"];
	$uid=$rowa["uid"];
	$time =time();
	$sql="update blast_member_recharge set rechargeAmount='$amount',coin='$coin1',fcoin='fcoin1',rechargeTime='$time',state=1 where rechargeId='$subject'";
mysql_query($sql);
$sql="update blast_members set coin='$coin2' where uid=".$uid;
if(mysql_query($sql)){
echo "success";		//请不要修改或删除
}
}
//执行商户处理程序

}
else{
echo "fail";
}
?>
