<?php 
header("Content-type:text/html;charset=utf-8");
date_default_timezone_set('PRC');//设置时间
require('JWT.php');//引进JWT文件
use Firebase\JWT\JWT;//使用jwt命名空间
define("KEY","234w5e3i6ytuhgjftradwwer5tyhfgd45dd54");//设置秘钥
$res['result']='failed';
$action=@$_GET['action'];
if($action=="login"){//判断是不是登录操作
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $userName=$_POST['userName'];
        $password=md5($_POST['password']);
		include("conn.php");
		$rs=mysql_query("select * from admins where userName='$userName' and pwd='$password'");
		$num=mysql_num_rows($rs);
		if($num>0){
			$nowtime=time();
			            $token=[
			                'iss'=>'http://localhost',
			                'aud'=>'http://localhost',
			                'iat'=>$nowtime,
			                'nbf'=>$nowtime+10,
			                'exp'=>$nowtime+600,
			                'data'=>[
			                    'userId'=>1,
			                    'userName'=>$userName
			                ]
			                ];
			                $jwt=JWT::encode($token,KEY);
			                $res['result']='success';
			                $res['jwt']=$jwt;
			        }else{
			            $res['msg']='用户名或密码错误！';
			        }
					
		}
		 echo json_encode($res);
		 
		 
		
    
    } //login的else
	else{
	    $jwt=@$_SERVER['HTTP_X_TOKEN'];
	    if(empty($jwt)){
	        $res['msg']='非法登录';
	        echo json_encode($res);
	        exit;
	    }
	    try{
	        JWT::$leeway=60;
	        $decoded=JWT::decode($jwt,KEY,['HS256']);
	        $arr=(array)$decoded;
	        if($arr['exp']<time()){
	            $res['msg']="请重新登录";
	
	        }
	        else{
	            $res['result']='success';
	            $res['imfo']=$arr;
	        }
	
	    }catch(Exception $e){
	        $res['msg']='Token验证失效，请重新登陆';
	    }
	    echo json_encode($res);
	}
	?>