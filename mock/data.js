var data = Mock.mock("data1.php","post",function(options){
    var data=JSON.stringify(options.body)
    var data1=data.split("&")
    // return options.body;
    console.log(data1)
    return data1;
})