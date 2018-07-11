<?php
//个人中心，学习jsonp时用到的，跨域登录
session_start();
if(isset($_SESSION['uid'])){
    echo "欢迎{$_SESSION['uid']}";
    $sid = session_id();
    $sname = session_name();
}else{
    echo '尚未登录';
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>A站个人中心</title>
    <script>
        function goToB(){
            var scri = document.createElement("script");
            scri.src = "http://s.cn/sso_onclick/api.php?sid=<?php echo $sid; ?>&sname=<?php echo $sname;?>";
            document.head.appendChild(scri);
        }
    </script>
</head>
<body>
<hr>
<a href="javascript:goToB()">登录B站</a>
<hr>
<!-- <span id='info'></span> -->
</body>
</html>