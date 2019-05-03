$(document).ready(function(){
$("#submit1").click(function(){

var salesid = $('#salesid').val();
var customerid = $('#customerid').val();
var totalamount = $('#totalamount').val();
var paytype = $('#paytype').val();
var discount = $('#discount').val();
var payamount = $('#payamount').val();
var branch = $('#branch').val();

var isubmit = $('#submit1').val();

if (customerid != "" && totalamount !="") {
    $.ajax ({
    url: "doSales.php",
    type: "POST",
    data: "salesid="+salesid+"&customerid="+customerid+"&totalamount="+totalamount+"&paytype="+paytype+"&discount="+discount+"&payamount="+payamount+"&branch="+branch+"&submit1="+isubmit,
    success: function(result) {
       alert (result)
	   window.location = "sales.php";
    }
});
}
else {
    alert("Please enter Last Name and First Name.");
}
return false;
});
});