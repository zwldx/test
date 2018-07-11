<?php
session_start();
//此页面为jsonp跨域请求页面

// $uid = $_SESSION['uid'];
$sid = session_id();
$sname = session_name();
?>
<script src="http://s.cn/sso/api.php?sid=<?php echo $sid; ?>&sname=<?php echo $sname;?>"></script>