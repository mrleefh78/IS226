$(document).ready(function(){
$("#submit1").click(function(){

var customerid = $('#customerid').val();
var lname = $('#lname').val();
var fname = $('#fname').val();
var contact = $('#contact').val();
var address = $('#address').val();
var points = $('#points').val();
var branch = $('#branch').val();

var isubmit = $('#submit1').val();

if (lname != "" && fname !="") {
    $.ajax ({
    url: "doCustomers.php",
    type: "POST",
    data: "customerid="+customerid+"&lname="+lname+"&fname="+fname+"&contact="+contact+"&address="+address+"&points="+points+"&branch="+branch+"&submit1="+isubmit,
    success: function(result) {
       alert (result)
	   window.location = "customers.php";
    }
});
}
else {
    alert("Please enter Last Name and First Name.");
}
return false;
});
});