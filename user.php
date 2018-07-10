<?php
//个人中心，学习jsonp时用到的，跨域登录
session_start();
if(isset($_SESSION['uid'])){
    echo "欢迎{$_SESSION['uid']}";
}else{
    echo '尚未登录';
    die;
}
?>
<hr>
<a href="session.php">登录B站</a>