<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
@session_start();
require_once '../utils/DBUtil.php';
$orderid = $_GET['orderid'];//订单id
$pingjia = $_GET['pingjia'];//评价信息

$con = getConn();
mysql_select_db("sales", $con);
//更新该订单id的评价信息
mysql_query("update orders set pingjia='$pingjia' where id=$orderid");
//更新状态为3，表示已成功
mysql_query("update orders set status = '3' where id=$orderid");
mysql_close($con);
?>
<script type="text/javascript">
	alert("评价成功");
	window.location = "../view/myorder2.php"
</script>
</head>
</html>