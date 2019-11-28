<?php
class Connectclass{

    const address = 'localhost';
    const user_name = 'root';//改成自己数据库用户
    const user_password = '';//改成自己的数据库密码
    const user_db='hospital';//改成自己的数据库库名

    function __construct()
    {
        
    }
    public function to_connect()
    {
    $conn = mysqli_connect(self::address,self::user_name,self::user_password,self::user_db);
    if(!$conn){
        die("连接失败".$conn->errno);
    }
    return $conn;
    }

}
?>
