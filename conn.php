<?php
$conn=mysql_connect("localhost:3306","a0918180555","26438749")or die("数据库服务器连接错误".mysql_error());//建立与xampp服务器与大宇服务器之间的连接
//$connID=mysql_connect("dev.dxdc.net:3306","a0918180555","26438749");
mysql_select_db("a0918180555",$conn) or die("数据库访问错误".mysql_error());//找到连接数据库
mysql_query("set names utf8");//设置字符集
?>