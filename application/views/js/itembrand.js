$(document).ready(function(){
$("#submit1").click(function(){

var brandid = $('#brandid').val();
var brandname = $('#brandname').val();
var isubmit = $('#submit1').val();

if (brandid != "" && brandname !="") {
    $.ajax ({
    url: "doItemBrand.php",
    type: "POST",
    data: "brandid="+brandid+"&brandname="+brandname+"&submit1="+isubmit,
    success: function(result) {
       alert (result)
	   window.location = "itembrand.php";
    }
});
}
else {
    alert("Please enter ID and Name.");
}
return false;
});
});