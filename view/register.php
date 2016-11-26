<!-- 注册页面 -->
<!DOCTYPE html>
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>注册</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">

  
    <link href="../css/signin.css" rel="stylesheet">


  </head>

  <body>

    <div class="container">

      <form class="form-signin" action="../controller/regController.php">
        <h2 class="form-signin-heading">请注册</h2>
        <label for="inputEmail" class="sr-only">用户名</label>
        <input name="username"  id="inputEmail" class="form-control" style="margin-bottom:10px" placeholder="用户名" required="" autofocus="">
        <label for="inputPassword" class="sr-only" >密码</label>
        <input name="password" type="password" id="inputPassword" class="form-control" style="margin-bottom:10px" placeholder="密码" required="">
        <label for="inputPhone" class="sr-only">手机</label>
        <input name="phone" type="phone" id="inputPhone" class="form-control" style="margin-bottom:10px" placeholder="手机" required="" autofocus="">
        <!-- 选择身份，卖家或者卖家 -->
        <select class="form-control" name="type">
        	<option value="1">买家</option>
        	<option value="2">卖家</option>
        </select>
        <button class="btn btn-lg btn-primary btn-block" style="margin-top:10px" type="submit">确认</button>
        <br>
        <a href="login.php" style="margin-left:240px;margin-top:20px;font-size:1.5em">登录</a>
      </form>
	 
    </div> <!-- /container -->


</body></html>