<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
@session_start();
require_once '../utils/DBUtil.php';
$id = $_GET['id'];
$saler = $_GET['saler'];
$buyer=$_SESSION['username'];
date_default_timezone_set('PRC'); 
$ordertime = date('Y-m-d H:i:s');//获取当前时间
$con = getConn();
mysql_select_db("sales", $con);
//echo "INSERT INTO orders(goodid,saler,buyer,ordertime,status) VALUES ($id, '$saler', $buyer,'$ordertime','0')";
//插入数据库
mysql_query("INSERT INTO orders(goodid,saler,buyer,ordertime,status) VALUES ($id, '$saler', '$buyer','$ordertime','0')");
mysql_close($con);
?>
<script type="text/javascript">
	alert("下单成功！");
	window.location = "../view/myorder2.php";//跳转到我的订单页面
</script>
</head>
</html>