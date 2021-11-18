<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	$jwt=$_SERVER['HTTP_TOKEN'];
	include("vaidata.php");
	if(vaildata($jwt)=="success"){
		$messageId=$_POST['messageId'];
		include("conn.php");
		$rs=mysqli_query($conn,"delete  from messages where messageId='$messageId'");
		if($rs){
			echo '{"status":"10001","msg":"success"}';
		}else{
			echo '{"status":"20001","msg":"留言无法删除,请联系管理员"}';
		}
	}
	
}else{
	header("location:error.php");
}


?>