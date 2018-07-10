<?php
session_start();
//此页面为jsonp跨域请求页面

$uid = $_SESSION['uid'];

?>

<script src="http://s.cn/jsonp/api.php?uid=<?php echo $uid; ?>"></script>