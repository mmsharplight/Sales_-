<?php
//获取数据库连接并设置字符集为utf8
function getConn(){
	$con = mysql_connect("localhost","root","");
	mysql_set_charset("utf8", $con);
	return $con;
}
?>
