$(document).ready(function(){
$("#submit").click(function(){

var username = $('#form-username').val();
var password = $('#form-password').val();

if (username != "" && password !="") {
    $.ajax ({
    url: "doLogin.php",
    type: "POST",
    data: "username="+username+"&password="+password,
    success: function(result) {
        if(result == "OK username or password.")
		{
		window.location = "main.php";
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