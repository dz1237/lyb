var nocache =  new Date().getTime();
var data=Mock.mock("delete.php","post",function(a1){
	console.log(a1);
	let a2=new URLSearchParams(a1.body);
	let messageId=a2.get("messageId");
	console.log("messageId",messageId);
	if(messageId){
		alert(`删除的id${messageId}`);
		return  {status:"10001",msg:"success"};	
	}else{
		return {status:"20001",msg:"删除失败,算了,你也别联系管理员了,管理员没心情回你"};
	}
	
	
})