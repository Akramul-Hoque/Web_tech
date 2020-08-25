"use strict"



function validate(){

	var username = document.getElementById('username').value;
	var email = document.getElementById('email').value;

	
	
	

	if(username == ""){
		document.getElementById('userMsg').innerHTML = "username can't left empty";
		return false;

	}
	 var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
	}
	else{
		return true;
	}



}




function remover(){
	document.getElementById('userMsg').innerHTML = "";
	document.getElementById('emailMsg').innerHTML = "";
}

function xyz(){

	if(document.getElementById('username').value == ""){
		document.getElementById('userMsg').innerHTML = "this field is required!";
	}if(document.getElementById('email').value == ""){
		document.getElementById('emailMsg').innerHTML = "this field is required!";
	}
}