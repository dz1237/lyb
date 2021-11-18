var nocache =  new Date().getTime();
var data=Mock.mock("reply.php","post",function(a1){
	console.log(a1);
	let a2=new URLSearchParams(a1.body);
	let messageId=a2.get("messageId");
	let replyContent=a2.get("reply");
	console.log("page",replyContent);//这里的第一页传过来会显示不存在
	console.log("messageId",messageId);
	if(messageId&&replyContent){
		alert(`回复的id${messageId},回复的内容是${replyContent}`);
		return  {status:"10001",msg:"success"};	
	}else{
		return {status:"20001",msg:"回复失败,算了,你也别联系管理员了,管理员没心情回你"};
	}
	
	
})