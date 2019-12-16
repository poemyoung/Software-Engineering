<?php
//文章名字查找类
require_once 'mysql_connect.php';
header("Content-Type:text/html;charset=utf-8");
class ArticleNameclass{
    function __construct($article_name)
    {
        $this->content = $article_name;
    }

    public function get_result(){
        $conn_obj = new Connectclass();
        $conn = $conn_obj->to_connect();
        mysqli_query($conn,"SET NAMES 'utf8");
        $this->content = mysqli_real_escape_string($conn,$this->content);
        $sql = "SELECT * FROM article WHERE art_title LIKE '%".$this->content."%'";
        $res = mysqli_query($conn,$sql);
        return $res;
    }

    private $content;
}
?>