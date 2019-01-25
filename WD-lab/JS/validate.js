
function checkEmail(e){
	var element=e.target;
	if(/[^a-zA-Z0-9@._]/.test(element.value)){
		alert("Email is invalid!Only character a-z A-z 0-9 @ . _ are allowed.");
		element.value="";
		return false;
	}
	if(!/[a-zA-Z]/.test(element.value)){
		alert("Email is invalid!Character a-z A-z are must.");
		element.value="";
		return false;
	}
	if(!/[@]/.test(element.value)){
		alert("Email is invalid!You are missing @.");
		element.value="";
		return false;
	}
	if(!/[.]/.test(element.value)){
		alert("Email is invalid!. domain name is missing.");
		element.value="";
		return false;
	}
	return true;
}

function checkSubject(e){
	var element=e.target;
	if(/[^a-zA-Z]/.test(element.value)){
		alert("Invalid Subject.Use only a-z or A-z");
		element.value="";
		return false;
	}
}

function submitForm(e){
	if(document.getElementById('user-email').value!="" && document.getElementById('subject').value!="" && document.getElementById('message').value!=""){
		var contact=document.getElementById('contacts');
		contact.innerHTML="<h3>Thank you for feedback.I'LL get to you shortly<h3>";
	}
}

var email=document.getElementById('user-email');
email.addEventListener('blur',checkEmail,false);

var subject=document.getElementById('subject');
subject.addEventListener('blur',checkSubject,false);

var submit=document.getElementById('submit-btn');
submit.addEventListener('click',submitForm,false)
