$(document).ready(function(){
$("#submit1").click(function(){

var userid = $('#userid').val();
var username = $('#username').val();
var password = $('#password').val();
var lname = $('#lname').val();
var fname = $('#fname').val();
var account = $('#account').val();
var branch = $('#branch').val();
var isubmit = $('#submit1').val();

if (username != "" && password !="") {
    $.ajax ({
    url: "doUserst.php",
    type: "POST",
    data: "userid="+userid+"&username="+username+"&password="+password+"&lname="+lname+"&fname="+fname+"&account="+account+"&branch="+branch+"&submit1="+isubmit,
    success: function(result) {
       alert (result)
	   window.location = "users.php";
    }
});
}
else {
    alert("Please enter User Name and Password.");
}
return false;
});
});