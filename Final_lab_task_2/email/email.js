"use strict"


	function validate() {
    var email = document.getElementById('email');
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
	document.getElementById('emailMsg').innerHTML = "";
}

function xyz(){

	if(document.getElementById('email').value == ""){
		document.getElementById('emailMsg').innerHTML = "this field is required!";
	}
}