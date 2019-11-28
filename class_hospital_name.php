<?php
//医院名字查找类
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
        $sql = "SELECT * FROM hospital WHERE hos_name LIKE '%".$this->content."%'";
        $res = mysqli_query($conn,$sql);
         return $res;       
    }
    private $content;
}
?>