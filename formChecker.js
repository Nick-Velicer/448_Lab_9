document.getElementById("reset").onclick = function() {
	document.getElementById("ship1").checked = false;
	document.getElementById("ship2").checked = false;
	document.getElementById("ship3").checked = false;
	document.getElementById("succulent").value = "";
	document.getElementById("cactus").value = ""; 
	document.getElementById("flower").value = "";
	document.getElementById("username").value = "";
	document.getElementById("password").value = "";
}


let shipClicked = false;

document.getElementById("ship1").onclick = function() {shipClicked = true};
document.getElementById("ship2").onclick = function() {shipClicked = true};
document.getElementById("ship3").onclick = function() {shipClicked = true};


//https://stackoverflow.com/questions/46155/how-to-validate-an-email-address-in-javascript
//used this post to help with the email regular expression
function validate(string) {
    const regex = RegExp(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
    return regex.test(String(string).toLowerCase());
}

document.getElementById("submit").onmouseover = function(){
	if (!shipClicked) {
		alert("Error: please select a shipping option");
	}
	else if (document.getElementById("succulent").value == "" || document.getElementById("cactus").value == "" || document.getElementById("flower").value == "") {
		alert("Error: please fill in all quantities");
	}	
	else if (document.getElementById("succulent").value.valueOf() < 0 || document.getElementById("cactus").value.valueOf() < 0 || document.getElementById("flower").value.valueOf() < 0) {
		alert("Error: quantities must be above 0");
	}
	else if (!validate(document.getElementById("username").value)) {
		alert("Error: username must be an email");
	}
	else if (document.getElementById("password").value == "") {
		alert("Error: password cannot be blank");
	}
}