$(document).ready(function(){
$("#submit1").click(function(){

var itemid = $('#itemid').val();
var itemname = $('#itemname').val();
var isubmit = $('#submit1').val();

if (itemid != "" && itemname !="") {
    $.ajax ({
    url: "doItemClass.php",
    type: "POST",
    data: "itemid="+itemid+"&itemname="+itemname+"&submit1="+isubmit,
    success: function(result) {
       alert (result)
	   window.location = "itemclass.php";
    }
});
}
else {
    alert("Please enter Item Class ID and Item Class Name.");
}
return false;
});
});