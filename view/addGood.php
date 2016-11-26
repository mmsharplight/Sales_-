<!-- 增加商品页面 -->
<!DOCTYPE html>
<html lang="zh-CN">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>卖家页面</title>
    <!-- 引入bootstrap -->
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
<form action="../controller/addGoodController.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">商品名称</label>
    <input name="name" class="form-control" id="name" placeholder="商品名称">
  </div>
  <div class="form-group">
    <label for="from">产地</label>
    <input name="from"  class="form-control" id="from" placeholder="产地">
  </div>
  <div class="form-group">
    <label for="price">价格</label>
    <input name="price" class="form-control" id="from" placeholder="价格">
  </div>
  <div class="form-group">
    <label for="pic">选择图片</label>
    <input name="file" type="file" id="pic">
  </div>
 
  <button type="submit" class="btn btn-default">提交</button>
</form>
</div>
</body>
</html>
<?php
?>