$(document).ready(function(){
$("#submit1").click(function(){

var priceid = $('#priceid').val();
var packname = $('#packname').val();
var price = $('#price').val();
var branch = $('#branch').val();

var isubmit = $('#submit1').val();

if (price != "" && packname !="") {
    $.ajax ({
    url: "doPackPrice.php",
    type: "POST",
    data: "packname="+packname+"&price="+price+"&branch="+branch+"&submit1="+isubmit,
    success: function(result) {
       alert (result)
	   window.location = "packprice.php";
    }
});
}
else {
    alert("Please enter Price and Name.");
}
return false;
});
});