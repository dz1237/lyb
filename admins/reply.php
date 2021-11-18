<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	$jwt=$_SERVER['HTTP_TOKEN'];
	include("vaidata.php");
	if(vaildata($jwt)=="success"){
		$messageId=$_POST['messageId'];
		$reply=$_POST['reply'];
		include("conn.php");
		 $flag=mysqli_query($conn,"update messages set reply='$reply' where messageId='$messageId'");
			  if($flag){
			    echo '{"status":"10001","msg":"success"}';	
			   }else{
			     echo '{"status":"20001","msg":"回复失败,请联系管理员"}';
			   }
	}
	
}else{
	header("location:error.php");
}

?>