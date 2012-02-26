function checkForm () {
	if (document.getElementById("name").value.length < 5) {
		alert("Bitte gib deinen Namen an");
		return false;
	}
	
	if (document.getElementById("email").value.length < 5) {
		alert("Bitte gib deine E-Mail an");
		return false;
	}

	return true;
}