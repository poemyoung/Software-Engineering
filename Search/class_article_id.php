<?php
//文章主键查找类
require_once 'mysql_connect.php';
header("Content-Type:text/html;charset=utf-8");
class ArticleIdclass{
    function __construct($id)
    {
        $this->content = $id;
    }

    public function get_result(){
        $conn_obj = new Connectclass();
        $conn = $conn_obj->to_connect();
        mysqli_query($conn,"SET NAMES 'utf8'");
        $this->content = mysqli_real_escape_string($conn,$this->content);
        $sql = "SELECT * FROM article WHERE art_id='".$this->content."'";
        $res = mysqli_query($conn,$sql);
         return $res;    
    }

    private $content;
}
