<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
	$messageId=$_POST["messageId"];
	include("conn.php");
	$rs=mysql_query("update lyby set sh=1 where messageId='$messageId'");
	if($rs){
		echo '{"status":"10001","msg":"审核成功"}';
	}else{
		echo '{"status":"30001","msg":"审核失败"}';
	}
}else{
	header("location:error.php");
}
?>