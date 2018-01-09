<?php 
error_reporting(0);
// var_dump($args[0]);
 ?>
<html>
	<head>
		<meta http-equiv=Content-Type content="text/html;charset=utf-8">
		<title>处理充值</title>
		<style>
			ul li{
				list-style: none;
			}
			span{
				color:red;
			}
		</style>
	</head>
	<body>
	<?php 
		if ($args[0]['mBankId'] == 10) {
	?>
		<div>
			 <h3>订单提交成功，请扫描【支付宝】二维码付款！</h3>
			 <img src="http://<?php echo $_SERVER['SERVER_NAME'];?>/ewm.png" alt="" width="200px">
		</div>
		<ul>
			<li>订 单 号：<?=$args[0]['rechargeId']?></li>
			<li>应付金额：<span><?=$args[0]['amount']?></span></li>
			<li><b>出现充值问题请及时联系客服！</b></li>
			<li><button id="charge-btn" class="mycss" onclick="javascript :history.go(-1);">已完成</button></li>
		</ul>
	<?php 
		}elseif ($args[0]['mBankId'] == 14) {
	?>
			<div>
			 <h3>订单提交成功，请扫描【微信】二维码付款！</h3>
			 <img src="http://<?php echo $_SERVER['SERVER_NAME'];?>/ewm.png" alt="" width="200px">
			</div>
			<ul>
				<li>订 单 号：<?=$args[0]['rechargeId']?></li>
				<li>应付金额：<span><?=$args[0]['amount']?></span></li>
				<li><b>出现充值问题请及时联系客服！</b></li>
				<li><button id="charge-btn" class="mycss" onclick="javascript :history.go(-1);">已完成</button></li>
			</ul>
			<?php
		}else{
			echo "请自己对接！";
		}
	?>
	</body>
</html>