var nocache =  new Date().getTime();
var data=Mock.mock("message.php","post",function(options){
	console.log(options.body)
	var a2=new URLSearchParams(options.body);
	var page=a2.get("page");
	var pagecount=a2.get("pagecount");
	console.log("page",page);//这里的第一页传过来会显示不存在
	if(page<=pagecount||page==1){
		var data1 = Mock.mock({
			'status|1':["10001"],
		    // 属性 list 的值是一个数组，其中含有 1 到 10 个元素
		    'data|5': [{
		        // 属性 id 是一个自增数，起始值为 1，每次增 1
		        'messageId|+1': 1,
				'addTime':nocache,
		        'face|1':["1.png","2.png","3.png","4.png","5.png","6.png","7.png","8.png","9.png","10.png"],
		        'author|1':'@name',
		        'title|1':["平安喜乐","兰因絮果","目成心许","蝉不知雪","千秋几世","枯木生花"],
		        'content|1':["终是faker梦了蝶,你是恩静亦是劫","当你凝视深渊的时候，深渊也在凝视你。","非榆晚桑","无人伴你左右,便护自己周全","提灯跳斩惊鸿现","从一而终，认真且怂","如果能拥抱你就好了，可惜我只是一段文字"],
		        'reply|1':["说的好"],
				'sh|1':[1,0]
		    }]
		});
		return data1;
	}
	
})