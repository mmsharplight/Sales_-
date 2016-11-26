<!-- 买家订单页面 -->
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
	$result = mysql_query("SELECT * FROM orders where buyer = '$username'");
	
	while($row = mysql_fetch_array($result))
	{
		$goodid = $row['goodid'];
		$saler = $row['saler'];
		$buyer = $row['buyer'];
		$result2 = mysql_query("SELECT * FROM good where id = '$goodid'");
		$goodrow = mysql_fetch_array($result2);
		$result3 = mysql_query("SELECT * FROM users where username = '$saler'");
		$salerrow = mysql_fetch_array($result3);
		$result4 = mysql_query("SELECT * FROM users where username = '$buyer'");
		$buyerrow = mysql_fetch_array($result4);
	 ?>
	 	<div class="col-lg-4">
	 		<div class="thumbnail" style="height:750px">
		      <img src="../upload/<?php echo $goodrow['pic']?>" alt="">
		      <div class="caption">
		        <h3><?php echo $goodrow['name']?></h3>
		        <p>产地:<?php echo $goodrow['froms']?></p>
		         <p>价格:<?php echo $goodrow['price']?></p>
		         <p>下单时间:<?php echo $row['ordertime']?></p>
		         <p>物流信息:<?php echo $row['wuliu']?></p>
		         <p>评价:<?php echo $row['pingjia']?></p>
		         <p>状态:
		         	<?php 
		         		if($row['status']=='0'){
		         			echo '待发货';
		         		}
						if($row['status']=='1'){
		         			echo '待确认收货';
		         		}
						if($row['status']=='2'){
		         			echo '待评价';
		         		}
						if($row['status']=='3'){
		         			echo '已成功';
		         		}
		         	?>
		         </p>
		         <br>
		         <p>卖家:<?php echo $salerrow['username']?></p>
		         <p>卖家手机:<?php echo $salerrow['phone']?></p>
		         <br>
		         <p>买家:<?php echo $buyerrow['username']?></p>
		         <p>买家手机:<?php echo $buyerrow['phone']?></p>
		         <?php 
		        	//状态1表示待收货
					if($row['status']=='1'){
		         		?>
		         		<p><a href="../controller/shouhuo.php?orderid=<?php echo $row['id']?>" class="btn btn-primary" role="button">确认收货</a></p> 
		         	<?php 
		         	}
		         	//状态2表示待评价
					if($row['status']=='2'){
		         		?>
		         		<p><a href="../view/pingjia.php?orderid=<?php echo $row['id']?>" class="btn btn-primary" role="button">评价</a></p>
		         	<?php 
		         	}
		         ?>
		         
		      </div>
		    </div>
	 	</div>
	 <?php 
	}
	
	mysql_close($con);
?>
</body>
</html>
