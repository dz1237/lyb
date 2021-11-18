var nocache =  new Date().getTime();
var data=Mock.mock("sh.php","post",function(a1){
	console.log(a1);
	let a2=new URLSearchParams(a1.body);
	let messageId=a2.get("messageId");
	console.log("messageId",messageId);
	if(messageId){
		alert(`审核的id${messageId}`);
		return  {status:"10001",msg:"success"};	
	}else{
		return {status:"20001",msg:"回复失败,算了,你也别联系管理员了,管理员没心情回你"};
	}
	
	
})