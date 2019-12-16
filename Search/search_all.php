<?php
//查找文章标题处理程序
 require_once 'class_all.php';
 header("Content-Type: text/html;charset=utf-8");
 header("Access-Control-Allow-Origin:*");
 header('Access-Control-Allow-Methods:POST');
 header('Access-Control-Allow-Headers:x-requested-with, content-type');
 $input = $_GET["data"];
//  $input = '丁香医生';
 $all = new Allclass($input);
 $res = $all->get_result();
echo json_encode($res);
 ?>
