<?php 
header("content-type:text/html;charset=utf-8");
include("conn.php");
$rs=mysql_query("select * from lyby where sh=1");
$num=mysql_num_rows($rs);
echo $num;
?>
