<?php
//医生科室查找类
require_once 'mysql_connect.php';
header("Content-Type: text/html;charset=utf-8");
class NationalAreaclass{
    function __construct($national_area)
    {
        $this->content = $national_area;
    }

    public function get_result(){
        $conn_obj = new Connectclass();
        $conn = $conn_obj->to_connect();
        mysqli_query($conn,"SET NAMES 'utf8'");
        $this->content = mysqli_real_escape_string($conn,$this->content);
        $sql = "SELECT DISTINCT provinceName,cityName FROM  national_area_codes";
        $res = mysqli_query($conn,$sql);
         return $res;       
    }
    private $content;
}
?>