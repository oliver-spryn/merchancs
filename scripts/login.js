function validateForm() {
    var x = document.forms["loginForm"]["username"].value;
    var y = document.forms["loginForm"]["password"].value;
    if (x==null || x=="" || y==null || y=="") {
        alert("Please enter a username and password");
        return false;
    }
	return true;
}