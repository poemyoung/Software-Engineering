<?php
//医生姓名查找类
require_once 'mysql_connect.php';
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
        $equal = 'true';
        $sql_equal = "SELECT *,'".$equal."' AS equal "."FROM doctor WHERE name='".$this->content."'";
        $res_equal = mysqli_query($conn,$sql_equal);
        if(mysqli_num_rows($res_equal) == 0){
            $equal = 'false';
        }else{
            return $res_equal;
        }

        if(!preg_match("/[a-z|A-Z]+/",$this->content)){
        $sql = "SELECT *,'".$equal."' AS equal "."FROM doctor WHERE name LIKE '%".$this->content."%'";
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
            $sql = "SELECT *,'".$equal."' AS equal "."FROM doctor WHERE pinying LIKE '".$this->content."'";
            $res = mysqli_query($conn,$sql);
            return $res;       
        }
    }
    private $content;
}
?>