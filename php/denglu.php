<?php
   $uname=$_GET['username'];
   $upass=$_GET['password'];

   //连接数据库
   $conn=mysqli_connect('127.0.0.1','root','root','user');
   //执行sql语句
   $sql="SELECT * FROM `info` WHERE `username`='$uname' AND `password`='$upass'";
   $res=mysqli_query($conn,$sql);
   //解析结果
   $row=mysqli_fetch_assoc($res);
   //断开连接
   mysqli_close($conn);

   if($row){
      echo "1";
   }else{
      echo "0";
   }
?>