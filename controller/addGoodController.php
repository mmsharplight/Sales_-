<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
//@表示不输出警告信息，session_start开启session
@session_start();
require_once '../utils/DBUtil.php';//引入数据库连接类
//获取post过来的参数
$name = $_POST['name'];//名字
$from = $_POST['from'];//来源
$price = $_POST['price'];//价格
$username=$_SESSION['username'];//当前用户
//上传文件
move_uploaded_file($_FILES["file"]["tmp_name"],"../upload/".$_FILES["file"]["name"]); 
$pic = $_FILES["file"]["name"];
//获取数据库连接
$con = getConn();
//使用sales数据库
mysql_select_db("sales", $con);
//查询
mysql_query("INSERT INTO good(name,froms,price,pic,username) VALUES ('$name', '$from', $price,'$pic','$username')");
mysql_close($con);
?>
<script type="text/javascript">
	alert("上传成功");//js弹出框
	window.location = "../view/salerMain.php"//跳转到主页面
</script>
</head>
</html>