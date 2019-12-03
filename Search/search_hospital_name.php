<?php
//查找医生姓名处理程序
   require 'class_hospital_name.php';
    header("Content-Type: text/html;charset=utf-8");
    header("Access-Control-Allow-Origin:*");
    header('Access-Control-Allow-Methods:POST');
    header('Access-Control-Allow-Headers:x-requested-with, content-type');
    $input = $_GET["hospitalName"];
 $hospital_name_get = new HospitalNameclass($input);
 $res = $hospital_name_get->get_result();
 try{
    $i = 0;
    $results = array();
    while($row = mysqli_fetch_array($res,MYSQLI_ASSOC)){
    $results[$i] = $row; 
     $i++;
 }
 if($i==0) throw new Exception(-1);
 echo json_encode($results);
 }catch(Exception $e){
     echo $e->getMessage();
 }
 ?>
