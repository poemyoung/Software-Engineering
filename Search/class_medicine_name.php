<?php
//药品名字查找类
require 'mysql_connect.php';
header("Content-Type:text/html;charset=utf-8");
class MedicineNameclass{
    function __construct($medicine_name)
    {
        $this->content = $medicine_name;
    }

    public function get_result(){
        $conn_obj = new Connectclass();
        $conn = $conn_obj->to_connect();
        mysqli_query($conn,"SET NAMES 'utf8");
        $this->content = mysqli_real_escape_string($conn,$this->content);
        $sql = "SELECT * FROM medicine WHERE med_name LIKE '%".$this->content."%'";
        $res = mysqli_query($conn,$sql);
        return $res;
    }

    private $content;
}
?>