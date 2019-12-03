<?php
//医生姓名查找类
require 'mysql_connect.php';
header("Content-Type: text/html;charset=utf-8");
class DoctorNameclass{
    function __construct($docotr_name)
    {
        $this->content = $docotr_name;
    }

    public function get_result(){
        $conn_obj = new Connectclass();
        $conn = $conn_obj->to_connect();
        mysqli_query($conn,"SET NAMES 'utf8'");
        $this->content = mysqli_real_escape_string($conn,$this->content);
        if(!preg_match("/[a-z|A-Z]+/",$this->content)){
        $sql = "SELECT * FROM doctor WHERE name LIKE '%".$this->content."%'";
        $res = mysqli_query($conn,$sql);
         return $res;       
        }
        else{
            $arr1 = array();
            $arr2 = array();
             preg_match("/[a-z|A-Z]+/",$this->content,$arr1);
            $arr2 = str_split($arr1[0]);
            $find_sent = '';
            foreach ($arr2 as $value){
               $find_sent = $find_sent."%".$value;
            }
            $this->content = $find_sent."%";
            $sql = "SELECT * FROM doctor WHERE pinying LIKE '".$this->content."'";
            $res = mysqli_query($conn,$sql);
            return $res;       
        }
    }
    private $content;
}
?>