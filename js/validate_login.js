function validate_login_form(){
	if(document.forms[0].name == ''){
		alert("Name is mandatory");
		return false;
	}
	if(document.forms[0].email == ''){
		alert("Email is mandatory");
		return false;
	}
	if(document.forms[0].password == ''){
		alert("Password is mandatory");
		return false;
	}
	return true;
}