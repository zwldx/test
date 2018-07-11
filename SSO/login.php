<?php
//此页面为登录页面
session_start();
$uid = '2';
$_SESSION['uid'] = $uid;

echo "登录成功，3秒后跳转到个人中心页面";
// header("refresh:3;url=user.php");
?>
<meta http-equiv="refresh" content="3; url=user.php" />
