<?php
//医生专长查找类
require_once 'mysql_connect.php';
header("Content-Type: text/html;charset=utf-8");
class DoctorExpertiseclass{
    function __construct($doctor_expertise)
    {
        $this->content = $doctor_expertise;
    }

    public function get_result(){
        $conn_obj = new Connectclass();
        $conn = $conn_obj->to_connect();
        mysqli_query($conn,"SET NAMES 'utf8'");
        $this->content = mysqli_real_escape_string($conn,$this->content);
        $sql = "SELECT * FROM doctor WHERE expertise LIKE '%".$this->content."%'";
        $res = mysqli_query($conn,$sql);
         return $res;       
    }
    private $content;
}
?>