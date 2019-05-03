$(document).ready(function(){
$("#submit1").click(function(){

var priceid = $('#priceid').val();
var itemname = $('#itemname').val();
var price = $('#price').val();
var branch = $('#branch').val();

var isubmit = $('#submit1').val();

if (price != "" && itemname !="") {
    $.ajax ({
    url: "doPrice.php",
    type: "POST",
    data: "itemname="+itemname+"&priceid="+priceid+"&price="+price+"&branch="+branch+"&submit1="+isubmit,
    success: function(result) {
       alert (result)
	   window.location = "price.php";
    }
});
}
else {
    alert("Please enter Price and Name.");
}
return false;
});
});