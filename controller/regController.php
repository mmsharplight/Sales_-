<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
// 在脚本执行期间包含并运行指定文件
require_once '../utils/DBUtil.php';
$username = $_GET['username'];
$password = $_GET['password'];
$type = $_GET['type'];
$phone = $_GET['phone'];
//创建连接
$con = getConn();
// 设置活动的 MySQL 数据库
mysql_select_db("sales", $con);
//将注册信息插入users表
mysql_query("INSERT INTO users VALUES ('$username', '$password', '$phone','$type')");
mysql_close($con);
?>
<script type="text/javascript">
	alert("Register Successfully!");
	window.location = "../view/login.php"//跳转到登录页面
</script>
</head>
</html>