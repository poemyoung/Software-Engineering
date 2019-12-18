<?php
//医院主键查找类
require_once 'mysql_connect.php';
header("Content-Type:text/html;charset=utf-8");
class HospitalToDoctorclass{
    function __construct($hospital_name)
    {
        $this->content = $hospital_name;
    }

    public function get_result(){
        $conn_obj = new Connectclass();
        $conn = $conn_obj->to_connect();
        mysqli_query($conn,"SET NAMES 'utf8'");
        $this->content = mysqli_real_escape_string($conn,$this->content);
        $sql = "SELECT * FROM doctor WHERE doctor.hos_name LIKE '%".$this->content."%'";
        $res = mysqli_query($conn,$sql);
         return $res;    
    }

    private $content;
}
