<!-- 买家主页面 -->
<!DOCTYPE html>
<html lang="zh-CN">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>买家页面</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">

 
</head>
<body>
<nav class="navbar navbar-default">
  <a class="navbar-brand" href="#">销售系统--买家</a>
  <div class="container">
  	<ul class="nav navbar-nav">
   		<li><a href="../view/buyerMain.php">所有商品</a></li>
   		<li><a href="../view/myorder2.php">我的订单</a></li>
   		<li><a href="../view/exit.php">退出</a></li>
   	</ul>
  </div>
</nav>
<?php
	@session_start();
	require_once '../utils/DBUtil.php';
	$con = getConn();
	mysql_select_db("sales", $con);
	$username  = $_SESSION['username'];
	$result = mysql_query("SELECT * FROM good");
	
	while($row = mysql_fetch_array($result))
	{
	 ?>
	 	<div class="col-lg-4">
	 		<div class="thumbnail"  style="height:450px">
		      <img src="../upload/<?php echo $row['pic']?>" alt="">
		      <div class="caption">
		        <h3><?php echo $row['name']?></h3>
		        <p>产地:<?php echo $row['froms']?></p>
		         <p>价格:<?php echo $row['price']?></p>
		        <p><a href="../controller/orderController.php?id=<?php echo $row['id']?>&saler=<?php echo $row['username']?>" class="btn btn-primary" role="button">购买</a></p>
		      </div>
		    </div>
	 	</div>
	 <?php 
	}
	
	mysql_close($con);
?>
</body>
</html>
