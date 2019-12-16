<?php
//疾病症状查找类
require_once 'mysql_connect.php';
header("Content-Type:text/html;charset=utf-8");
class DiseaseSymptomclass{
    function __construct($disease_symptom)
    {
        $this->content = $disease_symptom;
    }

    public function get_result(){
        $conn_obj = new Connectclass();
        $conn = $conn_obj->to_connect();
        mysqli_query($conn,"SET NAMES 'utf8");
        $this->content = mysqli_real_escape_string($conn,$this->content);
        $sql = "SELECT * FROM disease WHERE dis_symptom LIKE '%".$this->content."%'";
        $res = mysqli_query($conn,$sql);
        return $res;
    }

    private $content;
}
?>