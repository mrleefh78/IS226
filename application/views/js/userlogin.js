$(document).ready(function(){
$("#submit").click(function(){

var username = $('#form-username').val();
var password = $('#form-password').val();
var branch = $('#branch').val();

if (username != "" && password !="") {
    $.ajax ({
    url: "doUserLogin.php",
    type: "POST",
    data: "username="+username+"&password="+password+"&branch="+branch,
    success: function(result) {
        if(result == "OK username or password.")
		{
		window.location = "salesEntry.php";
		}
		else
		alert (result)
    }
});
}
else {
    alert("Please enter a username and password.");
}
return false;
});
});