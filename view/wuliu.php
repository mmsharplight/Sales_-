<!-- 更新物流信息页面 -->
<!DOCTYPE html>
<html lang="zh-CN">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>卖家页面</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">

 
</head>
<body>
<nav class="navbar navbar-default">
  <a class="navbar-brand" href="#">销售系统--卖家</a>
  <div class="container">
  	<ul class="nav navbar-nav">
   		<li><a href="../view/salerMain.php">我的商品</a></li>
   		<li><a href="../view/addGood.php">新增商品</a></li>
   		<li><a href="../view/myorder1.php">我的订单</a></li>
   		<li><a href="../view/exit.php">退出</a></li>
   	</ul>
  </div>
</nav>
<div style="width:600px;margin: 0 auto">
<!-- 提交信息的表单 -->
<form action="../controller/update.php">
  <div class="form-group">
    <label for="wuliu">物流信息:</label>
    <input name="wuliu" class="form-control" id="wuliu" placeholder="物流信息">
    <input type="hidden" value="<?php echo $_GET['orderid']?>" name="orderid">
  </div>
  <button type="submit" class="btn btn-default">提交</button>
</form>
</div>
</body>
</html>
<?php
?>