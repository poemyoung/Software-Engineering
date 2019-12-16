<?php
//药品名字查找类
require_once 'mysql_connect.php';
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
          //新增全等判断
          $equal = 'true';
        $sql = "SELECT *,'".$equal."' AS equal "."FROM medicine WHERE med_name LIKE '%".$this->content."%'";
        $res = mysqli_query($conn,$sql);
        if(mysqli_num_rows($res) == 1){
         return $res;
        }
        else {
            $equal = 'false';
            $sql = "SELECT *,'".$equal."' AS equal "."FROM medicine WHERE med_name LIKE '%".$this->content."%'";
        $res = mysqli_query($conn,$sql);
        return $res;
        }
    }

    private $content;
}
