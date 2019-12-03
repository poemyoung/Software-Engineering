<?php
//查找药品症状处理程序
 require 'class_medicine_symptom.php';
 header("Content-Type: text/html;charset=utf-8");
 header("Access-Control-Allow-Origin:*");
 header('Access-Control-Allow-Methods:POST');
 header('Access-Control-Allow-Headers:x-requested-with, content-type');
  $input = $_GET["medicineSymp"];
 $medicine_symp_get = new MedicineSympclass($input);
 $res = $medicine_symp_get->get_result();
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
