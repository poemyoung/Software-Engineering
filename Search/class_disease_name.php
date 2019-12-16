<?php
//疾病名字查找类
require_once 'mysql_connect.php';
header("Content-Type:text/html;charset=utf-8");
class DiseaseNameclass{
    function __construct($disease_name)
    {
        $this->content = $disease_name;
    }

    public function get_result(){
        $conn_obj = new Connectclass();
        $conn = $conn_obj->to_connect();
        mysqli_query($conn,"SET NAMES 'utf8");
        $this->content = mysqli_real_escape_string($conn,$this->content);
         //新增全等判断
         $equal = 'true';
         $sql_equal = "SELECT *,'".$equal."' AS equal "."FROM disease WHERE dis_name='".$this->content."'";
         $res_equal = mysqli_query($conn,$sql_equal);
         if(mysqli_num_rows($res_equal) == 0){
             $equal = 'false';
         }else{
             return $res_equal;
         }
       
       $sql = "SELECT *,'".$equal."' AS equal "."FROM disease WHERE dis_name LIKE '%".$this->content."%'";
       $res = mysqli_query($conn,$sql);
       return $res;
    }

    private $content;
}
?>