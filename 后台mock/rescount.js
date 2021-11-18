//随机生成留言条数
var data = Mock.mock("rescount.php","post",function(){
	var res={}
	res.rescount=15+Math.ceil(Math.random()*1000)%5;
	res.result="success";
	return res;
})