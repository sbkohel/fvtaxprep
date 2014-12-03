function start_signup() {
	var sub = document.getElementById("registerme");
	sub.onclick=verifyRegister;
}
function start_checkSignup(){
	var lk = document.getElementById("ccmain");
	
}

function verifyRegister(){
	var fm = document.getElementById("r_form");
	var fn = document.getElementById("r_fname");
	var ln = document.getElementById("r_lname");
	var addr = document.getElementById("r_addr");
	var ph = document.getElementById("r_phone");
	var cell = document.getElementById("r_cell");
	var email = document.getElementById("r_email");
	var un = document.getElementById("r_username");
	var p1 = document.getElementById("r_pass1");
	var p2 = document.getElementById("r_pass2");
	var esu = document.getElementById("r_esignup");
	var sub = document.getElementById("registerme");

	var matc = verifyPasswords(p1.value,p2.value);
	
	if(matc){
		//alert("y?");
		fm.submit();
	}
	else{
		//alert("d");
	}
}
function verifyName(){

}
function verifyPasswords(pa1, pa2){
	if(pa1.length > 7 && pa1.search(/[0-9]/)+1 && pa1.search(/[a-z]/i)+1 && pa1.search(/[\W|_]/)+1 && pa1==pa2) {
		//alert("match");
		return true;
	}
	else{
		//alert("notmatch");
		return false;
	}
}
function verifyPhone(){

}
function verifyAddress(){

}


