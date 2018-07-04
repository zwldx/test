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
$link = mysqli_connect('localhost', 'root', 'root', 'novel');
// $sql = "select * from address limit 300";
$sql = "select * from address";
$r = mysqli_query($link,$sql);
$arr = mysqli_fetch_all($r,MYSQLI_ASSOC);
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