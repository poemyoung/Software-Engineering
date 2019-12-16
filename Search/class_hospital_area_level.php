<?php
//医院级别查找类
require_once 'mysql_connect.php';
header("Content-Type: text/html;charset=utf-8");
class HospitalLevelAreaclass{
    function __construct($hospital_level_area)
    {
        if($hospital_level_area['area'][0] == '全国'){
            $this->content_area_province = '%';
        }else{
            $this->content_area_province = $hospital_level_area['area'][0];
        }
        if($hospital_level_area['level'] == '全部'){
            $this->content_level = '%';
        }else{
            $this->content_level = $hospital_level_area['level'];
        }
        if(count($hospital_level_area['area'])==2){
            if($this->content_area_city == '全部'){
                $this->content_area_city = '%';
            }
            $this->content_area_city = $hospital_level_area['area'][1];
        }else{
            $this->content_area_city = '%';
        }
    }

    public function get_result(){
        $conn_obj = new Connectclass();
        $conn = $conn_obj->to_connect();
        mysqli_query($conn,"SET NAMES 'utf8'");
        $this->content_area_province = mysqli_real_escape_string($conn,$this->content_area_province);
        $this->content_area_city = mysqli_real_escape_string($conn,$this->content_area_city);
        $this->content = mysqli_real_escape_string($conn,$this->content_level);
        $sql = "SELECT * FROM hospital WHERE class LIKE'%".$this->content_level."%' AND province LIKE'%".$this->content_area_province."%' AND city LIKE '%".$this->content_area_city."%'";
        $res = mysqli_query($conn,$sql);
         return $res;       
    }
    private $content_level;
    private $content_area_province;
    private $content_area_city;
}
?>