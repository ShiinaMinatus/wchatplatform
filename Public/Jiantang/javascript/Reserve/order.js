$("html").click(function(){
    $("#orderDate").datetimepicker('hide');

});
$("body").click(function(){
    $("#orderDate").datetimepicker('hide');

});
var pc=$("#porpleCount").val();
var svc=$("#selectValueCache").val();
$("#orderMerchandise").val(svc);
$("#porpleCountSubmit").val(pc);
var nowDayTime=new Date();
nowDayTime.setHours(0);
nowDayTime.setMinutes(0);
nowDayTime.setSeconds(0);
var endDate= getDateTimeMessage(nowDayTime,2);
$(".timesAlert").click(function(){
    $("#orderDate").datetimepicker('show');
    return false;
});
$("#submitOrder").click(function(){
    
    if($("#orderDate").val()==""||$("#orderTimeInput").val()==""){
        alert("请填写完整的预约时间（可能时间或日期未填写）");
        return false;
    }else{
        $(this).submit();
    }   
});

$("#orderMerchandiseHtml").val($("#orderMerchandise").find("option:first").html());
//alert($("#orderDate").val());
$("#orderMerchandise").change(function(){
    $("#orderMerchandiseHtml").val($(this).find("option:selected").html());
});
$("#orderDate").datetimepicker({
    format: "yyyy-mm-dd ",
    startDate:new Date(),
    minuteStep:30,
    autoclose:true,
    minView:0,
    forceParse:false,
    language:"zh-CN",
    beginHour:"9",
    endHour:"20"
});
//$("#orderTime").datetimepicker({
//format: "hh:ii",
//minuteStep:15,
//startDate:new Date(),
//autoclose:true,
//startView:1,
//maxView:1,
//minView:0,
//language:"zh-CN"
//});

$("#orderDate").datetimepicker().on('changeDate',function(ev){
    var changeTime=(ev.date.valueOf());

    changeTime=changeTime-(28800*1000);

    var changeDateTime=new Date(changeTime);
    var endHours=changeDateTime.getHours();
    var endMin=changeDateTime.getMinutes();
    if(endHours<=9){
        endHours="0"+endHours;
    }
    if(endMin<=9){
        endMin="0"+endMin;
    }
    var nowTime=endHours+":"+endMin;
    $("#orderTimeInput").val(nowTime);

    var weekNumber=changeDateTime.getDay();
    var weekDays=["周日","周一","周二","周三","周四","周五","周六"];
    var dayData=$("#orderDate").val();
    $("#orderDateWithNoWeek").val(dayData);
    $("#orderDate").val(dayData+""+weekDays[weekNumber]);
//alert($("#orderDate").val())
});