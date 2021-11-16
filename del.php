<?php 
if("$_SERVER[REQUEST_METHOD]"=="POST"){
	$messageId=@$_POST['messageId'];
	include("conn.php");
	$rs=mysql_query("delete from lyby where messageId='$messageId'");
	if($rs){
		echo '{"status":"10001","msg":"ok"}';
	}else{
		echo '{"status":"20001","msg":"删除失败"}';
	}
}else{
	echo '{"status":"30001","msg":"非法登录"}';
}
?>
