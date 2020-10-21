<?php
    header('content-type:text/html;charset=utf-8;');
    $uname=$_GET['username'];
    $upass=$_GET['password'];

    //连接数据库
    $conn=mysqli_connect('127.0.0.1','root','root','user');
    //执行spl语句
    $sql="INSERT INTO `info` VALUES (null,'$uname','$upass')";
    $res=mysqli_query($conn,$sql);
    //不需要解析
    //断开连接
    mysqli_close($conn);
    if($res){
        echo "1";
    }else{
        echo "0";
    }


?>