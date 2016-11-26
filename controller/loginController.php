<?php
@session_start();
require_once '../utils/DBUtil.php';
$username = $_GET['username'];//获取get传递过来的请求
$password = $_GET['password'];
$con = getConn();
mysql_select_db("sales", $con);
$result = mysql_query("SELECT * FROM users");//查询所有的用户
mysql_close($con);
while($row = mysql_fetch_array($result))
{
	if($row['username']==$username && $row['password']==$password){
		$_SESSION['username'] = $username; 
		$_SESSION['type'] = $row['type'];
		if($row['type']==1){//买家
			header("location:../view/buyerMain.php");//跳转买家主页面
			
		}else{//卖家
			header("location:../view/salerMain.php");//跳转卖家主页面
			
		}
	}
}


?>