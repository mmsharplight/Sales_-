<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
@session_start();
require_once '../utils/DBUtil.php';
$orderid = $_GET['orderid'];
$wuliu = $_GET['wuliu'];

$con = getConn();
mysql_select_db("sales", $con);
//根据订单id更新物流信息
mysql_query("update orders set wuliu='$wuliu' where id=$orderid");
mysql_close($con);
?>
<script type="text/javascript">
	alert("更新成功");
	window.location = "../view/myorder1.php"
</script>
</head>
</html>