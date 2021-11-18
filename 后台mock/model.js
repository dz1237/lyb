var data = Mock.mock("data.js",{
    // 属性 list 的值是一个数组，其中含有 1 到 10 个元素
    'data|1-10': [{
        // 属性 id 是一个自增数，起始值为 1，每次增 1
        'id|+1': 1,
        'name|1':'@name',
        'age|1':[19,20,21,18,22,23],
        'sex|1':["男","女"],
        'email|1':'@email',
        'sdept|1':["计算机系","数学系","英语系"]
    }]
})
// 输出结果
console.log(JSON.stringify(data, null, 4))


// var data=Mock.mock("message.php","post",function(){
	
// })