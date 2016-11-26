<!-- 登录页面 -->
<!DOCTYPE html>
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>登录</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/signin.css" rel="stylesheet">


  </head>

  <body>

    <div class="container">

      <form class="form-signin" action="../controller/loginController.php">
        <h2 class="form-signin-heading">请登录</h2>
        <label for="inputEmail" class="sr-only">用户名</label>
        <input name="username"  id="inputEmail" class="form-control" placeholder="用户名" required="" autofocus="">
        <label for="inputPassword" class="sr-only">密码</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="密码" required="">
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
        <br>
        <a href="register.php" style="margin-left:240px;margin-top:20px;font-size:1.5em">注册</a>
      </form>
	 
    </div> <!-- /container -->


</body></html>