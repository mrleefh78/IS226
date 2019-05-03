$(document).ready(function(){
$("#submit1").click(function(){

var itemid = $('#itemid').val();
var itemname = $('#itemname').val();
var classname = $('#classname').val();
var isubmit = $('#submit1').val();

if (itemid != "" && itemname !="") {
    $.ajax ({
    url: "doItemCat.php",
    type: "POST",
    data: "itemid="+itemid+"&itemname="+itemname+"&classname="+classname+"&submit1="+isubmit,
    success: function(result) {
       alert (result)
	   window.location = "itemcat.php";
    }
});
}
else {
    alert("Please enter Category ID and Category Name.");
}
return false;
});
});