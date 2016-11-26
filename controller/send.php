<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
@session_start();
require_once '../utils/DBUtil.php';
$orderid = $_GET['orderid'];
$con = getConn();
mysql_select_db("sales", $con);
//echo "update orders set status = '1' where id=$orderid";
//根据orderid更新状态
mysql_query("update orders set status = '1' where id=$orderid");
mysql_close($con);
?>
<script type="text/javascript">
	alert("发货成功");
	window.location = "../view/myorder1.php"
</script>
</head>
</html>