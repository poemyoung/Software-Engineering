<?php
//药品生产厂家查找类
require_once 'mysql_connect.php';
header("Content-Type:text/html;charset=utf-8");
class MedicineComclass{
    function __construct($medicine_com)
    {
        $this->content = $medicine_com;
    }

    public function get_result(){
        $conn_obj = new Connectclass();
        $conn = $conn_obj->to_connect();
        mysqli_query($conn,"SET comS 'utf8");
        $this->content = mysqli_real_escape_string($conn,$this->content);
        $sql = "SELECT * FROM medicine WHERE med_com LIKE '%".$this->content."%'";
        $res = mysqli_query($conn,$sql);
        return $res;
    }

    private $content;
}
?>