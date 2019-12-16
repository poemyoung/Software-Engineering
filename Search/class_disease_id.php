<?php
//疾病主键查找类
require_once 'mysql_connect.php';
header("Content-Type:text/html;charset=utf-8");
class DiseaseIdclass{
    function __construct($id)
    {
        $this->content = $id;
    }

    public function get_result(){
        $conn_obj = new Connectclass();
        $conn = $conn_obj->to_connect();
        mysqli_query($conn,"SET NAMES 'utf8'");
        $this->content = mysqli_real_escape_string($conn,$this->content);
        $sql = "SELECT * FROM disease WHERE id='".$this->content."'";
        $res = mysqli_query($conn,$sql);
         return $res;    
    }

    private $content;
}
