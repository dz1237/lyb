<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
	$userName=@$_POST["userName"];
	$face=@$_POST['face'];
	$title=@$_POST['title'];
	$area1=@$_POST['area1'];
	include("conn.php");
	$rs=mysql_query("insert into lyby (author,title,content,face,addTime)values('$userName','$title','$area1','$face',now())");
	if($rs){
		echo '{"status":"10001","msg":"ok"}';
	}else{
		echo '{"status":"30001","msg":"发布失败，请联系管理员"}';
	}
}else{
	// header("location:error.html");
}


?>