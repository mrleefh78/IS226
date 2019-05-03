$(document).ready(function(){
$("#submit1").click(function(){

var restockid = $('#restockid').val();
var itemname = $('#itemname').val();
var rdate = $('#datetimepicker1').val();
var quantity = $('#quantity').val();
var notes = $('#notes').val();
var posted = $('#posted').val();
var branch = $('#branch').val();

var isubmit = $('#submit1').val();

if (rdate != "" && itemname !="") {
    $.ajax ({
    url: "doRestock.php",
    type: "POST",
    data: "restockid="+restockid+"&itemname="+itemname+"&rdate="+rdate+"&quantity="+quantity+"&notes="+notes+"&posted="+posted+"&branch="+branch+"&submit1="+isubmit,
    success: function(result) {
       alert (result)
	   window.location = "restock.php";
    }
});
}
else {
    alert("Please enter Date and Name.");
}
return false;
});
});