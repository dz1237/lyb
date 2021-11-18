<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	$jwt=$_SERVER['HTTP_TOKEN'];
	require('vaidata.php');
	if(vaildata($jwt)=="success"){
		$messageId=$_POST['messageId'];
		include("conn.php");
		$rs=mysqli_query($conn,"update messages set sh=1 where messageId='$messageId'");
		if($rs){
			echo '{"status":"10001","msg":"success"}';
		}else{
			echo '{"status":"20001","msg":"审核状态无法修改,请联系管理员"}';
		}
	}
	
}else{
	header("location:error.php");
}

?>