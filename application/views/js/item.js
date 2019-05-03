$(document).ready(function(){
$("#submit1").click(function(){

var itemid = $('#itemid').val();
var itemname = $('#itemname').val();
var quantity = $('#quantity').val();
var reorder = $('#reorder').val();
var classname = $('#classname').val();
var brandname = $('#brandname').val();
var branch = $('#branch').val();

var isubmit = $('#submit1').val();

if (itemid != "" && itemname !="") {
    $.ajax ({
    url: "doItem.php",
    type: "POST",
    data: "itemid="+itemid+"&itemname="+itemname+"&quantity="+quantity+"&reorder="+reorder+"&classname="+classname+"&brandname="+brandname+"&branch="+branch+"&submit1="+isubmit,
    success: function(result) {
       alert (result)
	   window.location = "itemt.php";
    }
});
}
else {
    alert("Please enter ID and Name.");
}
return false;
});
});