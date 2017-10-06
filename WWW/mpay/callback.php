<?php
/* *
 * 功能：支付回调文件
 * 版本：1.0
 * 日期：2015-04-23
 * 说明：
 * DAVID 适应万金大部分版本.
 * 第三方申请 对接 QQ：85546880
 */
 
	require_once("Mobaopay.Config.php");
	require_once("MobaoPay.class.php");

	// 请求数据赋值
	$data = "";
	$data['apiName'] = $_REQUEST["apiName"];
	// 通知时间
	$data['notifyTime'] = $_REQUEST["notifyTime"];
	// 支付金额(单位元，显示用)
	$data['tradeAmt'] = $_REQUEST["tradeAmt"];
	// 商户号
	$data['merchNo'] = $_REQUEST["merchNo"];
	// 商户参数，支付平台返回商户上传的参数，可以为空
	$data['merchParam'] = $_REQUEST["merchParam"];
	// 商户订单号
	$data['orderNo'] = $_REQUEST["orderNo"];
	// 商户订单日期
	$data['tradeDate'] = $_REQUEST["tradeDate"];
	// Mo宝支付订单号
	$data['accNo'] = $_REQUEST["accNo"];
	// Mo宝支付账务日期
	$data['accDate'] = $_REQUEST["accDate"];
	// 订单状态，0-未支付，1-支付成功，2-失败，4-部分退款，5-退款，9-退款处理中
	$data['orderStatus'] = $_REQUEST["orderStatus"];
	// 签名数据
	$data['signMsg'] = $_REQUEST["signMsg"];
	//充值赠送百分比  为'0'则不开启活动 
	$czzs=0; //%

	print_r($data);
	// 初始化
	$cMbPay = new MbPay($mbp_key, $mobaopay_gateway);
	// 准备准备验签数据
	$str_to_sign = $cMbPay->prepareSign($data);
	// 验证签名
	$resultVerify = $cMbPay->verify($str_to_sign, $data['signMsg']);
	//var_dump($data);
	if ($resultVerify) 
	{
		// 签名验证通过
		echo "支付成功".'<br>';
		echo "商户订单号 ".$data['orderNo'].'<br>';
		echo "商户订单日期 ".$data['tradeDate'].'<br>';
		echo "商户参数 ".$data['merchParam'].'<br>';
		echo "Mo宝支付订单号 ".$data['accNo'].'<br>';
		echo "Mo宝支付账务日期 ".$data['accDate'].'<br>';
		echo "支付金额 ".$data['tradeAmt']."元".'<br>';
		echo "订单状态 ";
		
		if ($data['orderStatus'] == '0')
			echo "未处理[".$data['orderStatus']."]";
		else if ($data['orderStatus'] == '1')// 需更新商户系统订单状态
			echo "成功[".$data['orderStatus']."]";
		else if ($data['orderStatus'] == '2')// 需更新商户系统订单状态
			echo "失败[".$data['orderStatus']."]";
		else if ($data['orderStatus'] == '4')// 需更新商户系统订单状态
			echo "部分退货[".$data['orderStatus']."]";
		else if ($data['orderStatus'] == '5')// 需更新商户系统订单状态
			echo "全部退货[".$data['orderStatus']."]";
		else if ($data['orderStatus'] == '9')// 需更新商户系统订单状态
			echo "退款处理中[".$data['orderStatus']."]";
		else if ($data['orderStatus'] == '11')
			echo "订单过期[".$data['orderStatus']."]";
		else
			echo "其他[".$data['orderStatus']."]";

		/*商户需要在此处判定通知中的订单状态做后续处理*/
		/*由于页面跳转同步通知和异步通知均发到当前页面，所以此处还需要判定商户自己系统中的订单状态，避免重复处理。*/
		//----------------------------------------------------
		
		//  判断交易是否成功 DAVID 2015-04-27
		//----------------------------------------------------
		if ($_REQUEST["notifyType"] == 0 or $_REQUEST["notifyType"] == 1)
		{
				$Amount=$data['tradeAmt'];
				$BillNo=$data['orderNo'];
				$hostname="localhost"; //服务器的IP地址 或 服务器的名字 
				$dbuser="root"; //服务器的帐号 
				$dbpasswd="2E#@4$%EW"; //服务器的密码  改
				$dbname="boe"; //数据库的名字
				$conn = mysql_connect($hostname,$dbuser,$dbpasswd); //连接数据库 
				if (!$conn){die('Could not connect: ' . mysql_error());}
				//mysql_query("SET NAMES 'utf8'",$conn);
				mysql_select_db($dbname,$conn)or die("Unable to select database!"); 
				//查询当前订单名字
				$s_name_sql = "select username,id from ssc_member_recharge where rechargeId=$BillNo";  
				$s_name = mysql_query($s_name_sql) or die("Couldn't execute query!");
				while($row=mysql_fetch_array($s_name))
				{
				   $username=$row['username'];  //充值当前订单号是否存在
				   $id=$row['id']; //订单的ID
				}
				//查询当前订单是否存在
				$s_rId_sql = "select COUNT(extfield1) as crec from ssc_coin_log where extfield1=$BillNo";  
				$s_rId = mysql_query($s_rId_sql) or die("Couldn't execute query!");
				while($row=mysql_fetch_array($s_rId))
				{
				   $extfield1=$row['crec'];  //充值当前订单号是否存在
				}
				if($extfield1==0)
				{ //如果查询出来的订单系统不存在则添加、更新数据
				   if($czzs !='0'){
				     $rechrageAmount=number_format($Amount*(1+$czzs/100.00),2,'.',''); //充值赠送后的金额
				   }else{
					 $rechrageAmount=$Amount; //无活动
				   }
				   $s_info_sql = "select uid,coin from ssc_members where username='$username'";  
				   //根据名字username查询当前uid,当前金额
				   $s_info = mysql_query($s_info_sql) or die("Couldn't execute query!");
				   while($row=mysql_fetch_array($s_info)){
				     $uid=$row['uid'];  //充值帐号uid,当前金额
				     $bfAmount=$row['coin'];
				   }
				   $i_c_l = "insert into ssc_coin_log (uid,type,playedId,coin,userCoin,fcoin,liqType,actionUID,actionTime,actionIP,info,extfield0,extfield1) values ('$uid',0,0,'$rechrageAmount','$bfAmount'+'$rechrageAmount',0,1,0,UNIX_TIMESTAMP(),'0','在线充值','$id','$BillNo')";
				   $i_c_l_result=mysql_query($i_c_l);  //插入用户余额更新记录
				   $u_m_r="update ssc_member_recharge set rechargeTime=UNIX_TIMESTAMP(),rechargeAmount='$rechrageAmount',coin='$bfAmount',state='2',info='在线充值' where rechargeid='$BillNo'";
				   $u_m_r_result=mysql_query($u_m_r);  //更新用户帐变记录 
				   $u_o = "update ssc_members set coin = coin+'$rechrageAmount' where uid =$uid";
				   $u_o_result=mysql_query($u_o);  //更新用户表余额
				
				}
				mysql_close($conn); //关闭数据库
				$url = "notify.php";
				Header("Location: $url");
				return true;
		}
		return true;
	}else{
		// 签名验证失败
		echo "验证签名失败";
		return false;
	}
?>