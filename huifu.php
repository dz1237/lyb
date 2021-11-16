<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
	$messageId=$_POST["messageId"];
	$reply=$_POST["reply"];
	include("conn.php");
	$rs=mysql_query("update lyby set reply='$reply' where messageId='$messageId'");
	if($rs){
		echo '{"status":"10001","msg":"回复成功"}';
	}else{
		echo '{"status":"30001","msg":"回复失败"}';
	}
}else{
	echo '{"status":"30001","msg":"非法登录"}';
}
?>