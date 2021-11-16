$(function(){
    var s=0;
    $("#p1").click(function(){
        if(s==0){
            $("#fabu").css('left','5px');
            s=1;
        }else{
            $("#fabu").css('left','-410px')
          s=0;
        }
    })
	
})