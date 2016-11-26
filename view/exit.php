<?php
@session_start();
@session_unset();//清空session
header("location:../view/login.php");
?>