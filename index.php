<?php
// $link = mysqli_connect('localhost', 'root', 'root', 'novel');
// // $sql = "set names utf8";
// // mysqli_query($link,$sql);
// $sql = "select * from address where pid = '0'";
// $r = mysqli_query($link,$sql);
// $arr = mysqli_fetch_all($r,MYSQLI_ASSOC);

// var_dump($arr);

//循环实现
// function byLoop($arr){
//     foreach($arr as $v){
//         echo $v['name'].'<br>';
//         $sql = "select * from address where pid = '$v[code]'";
//         $r = mysqli_query($link,$sql);
//         $arr_2 = mysqli_fetch_all($r,MYSQLI_ASSOC);
//         foreach($arr_2 as $v_2){
//             echo '--'.$v_2['name'].'<br>';
//             $sql = "select * from address where pid = '$v_2[code]'";
//             $r = mysqli_query($link,$sql);
//             $arr_3 = mysqli_fetch_all($r,MYSQLI_ASSOC);
//             foreach($arr_3 as $v_3){
//                 echo '----'.$v_3['name'].'<br>';
//             }
//         }
//     }

// }
// $link = mysqli_connect('localhost', 'root', 'root', 'novel');
// // $sql = "select * from address limit 300";
// $sql = "select * from address";
// $r = mysqli_query($link,$sql);
// $arr = mysqli_fetch_all($r,MYSQLI_ASSOC);
// print_r($arr);
// $arr = [];
//递归实现(网上复制的)
// function getTree($arr,$pid){
//     // $tree = [];
//     $html = '';
//     foreach($arr as $k => $v){
//         if($v['pid']==$pid){
//             $html .="<li>".$v['name'];
//             $html .= getTree($arr,$v['code']);
//             $html = $html."</li>";
//             // $tree[] = $v;
//         }
//     }      
//     // return $tree; 
//     return $html ? '<ul>'.$html.'</ul>' : $html ;
// }
// $tree = getTree($arr,0);
// echo $tree;

//Recursion

// $code = '';
// for($i=1;$i<=6;$i++){
//     $code .= chr(rand(97,122));
// }
// echo strtoupper($code);
// $mem = new Memcache;
// $mem->connect('192.168.8.200',11211);
// $mem->set('aa','lovefailure');
// echo $mem->get('aa');
//实例化redis
 $redis = new Redis();
 //连接
 $redis->connect('192.168.8.200', 6379);
 //检测是否连接成功
//  echo "Server is running: " . $redis->ping();
 // 输出结果 Server is running: +PONG   
 // 设置一个字符串的值
 $redis->set('cat', 111);

 //获取一个字符串的值
 echo $redis->get('cat'); // 111

 // 重复set
 $redis->set('cat', 222);
 echo $redis->get('cat'); // 222

