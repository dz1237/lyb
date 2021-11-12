<?php 
$conn=@mysql_connect("localhost","root","") or die("db connect error!");//创建和数据库的连接
mysql_select_db("lybfywz",$conn);//连接指定的数据库
mysql_query("set names utf8");


?>