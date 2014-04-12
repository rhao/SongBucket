function validate() {
	var isValid = true;
	var nameFormat = /[^a-zA-Z&]/;
	var emailFormat = /[a-zA-Z0-9_\-]+@(([a-zA-Z_\-])+\.)+[a-zA-Z]{2,4}/;
	alert("yay!");
	if(false) {
		if (nameFormat.test(document.form.name.value)) { 
		alert("Your name must only contain letters."); 
		isValid = false;
		}
		else if (!emailFormat.test(document.form.email.value)) { 
			alert("Please enter a valid email."); 
			isValid = false;
		}
		else if(document.form.pass1.value.length < 5) {
			alert("Your password must be at least 5 characters long.");
			isValid = false;
		}
		else if(document.form.pass1.value.length > 15) {
			alert("Your password must be no more than 15 characters long.");
			isValid = false;
		}
		else if(document.form.pass1.value != document.form.pass2.value) {
			alert("Your verified password must match your password.");
			isValid = false;
		}
		return isValid;
	}
	
}