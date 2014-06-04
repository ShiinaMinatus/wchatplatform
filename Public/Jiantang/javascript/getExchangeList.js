        $(".summary").each(function(){
        var len=$(this).html().length;
        if(len>=20){
        var nowString= $(this).html().substr(0, 20)
        $(this).html(nowString+"...");
    }
});
$(".submitButton").click(function(){

var integrationVals=$(this).parent().parent();
var thisUrl=$(this).attr("href");
$("#checkButton").attr("href",thisUrl);
var integration=integrationVals.find(".pointStyle").html();
//var userIntegration=$("#userIntegration").html();
var userIntegration=$("#userPoint").val();
if(parseInt(integration)>parseInt(userIntegration)){
$("#myModalLabel").html("您的积分余额不足");
$("#checkButton").hide();
//return false;
}
});