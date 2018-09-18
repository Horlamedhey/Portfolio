// form function
function validate() {
		if (document.myform.name.value=="") {
			alert("Please fill all empty fields!");
			document.myform.name.focus();
			document.getElementById("name").style.backgroundColor='#112';
			document.getElementById("name").style.color='#fff';
			document.getElementById("body1").style.backgroundColor='#112';
			return false;
		}
		else if (document.myform.surname.value=="") {
			alert("Please fill all empty fields!");
			document.myform.surname.focus();
			document.getElementById("surname").style.backgroundColor='#112';
			document.getElementById("surname").style.color='#fff';
			document.getElementById("body1").style.backgroundColor='#112';
			return false;
		}
		else if (document.myform.username.value=="") {
			alert("Please fill all empty fields!");
			document.myform.username.focus();
			document.getElementById("username").style.backgroundColor='#112';
			document.getElementById("username").style.color='#fff';
			document.getElementById("body1").style.backgroundColor='#112';
			return false;
		}
		else if (document.myform.password.value=="") {
			alert("Please fill all empty fields!");
			document.myform.password.focus();
			document.getElementById("password").style.backgroundColor='#112';
			document.getElementById("password").style.color='#fff';
			document.getElementById("body1").style.backgroundColor='#112';
			return false;
		}
		if (document.myform.re_password.value!=document.myform.password.value) {
			alert("password does not match!");
			document.myform.re_password.focus();
			document.getElementById("re_password").style.backgroundColor='#112';
			document.getElementById("re_password").style.color='#fff';
			document.getElementById("body1").style.backgroundColor='#112';
			return false;
		}
		else if (document.myform.re_password.value==document.myform.password.value) {
			alert("Registered Successfully!");
			return true;
	}
}
	function validate1() {
			if (document.myform1.username1.value=="") {
			alert("Please fill all empty fields!");
			document.myform1.username1.focus();
			document.getElementById("username1").style.backgroundColor='#112';
			document.getElementById("username1").style.color='#fff';
			document.getElementById("body1").style.backgroundColor='#112';
			return false;
		}
		else if (document.myform1.password1.value=="") {
			alert("Please fill all empty fields!");
			document.myform1.password1.focus();
			document.getElementById("password1").style.backgroundColor='#112';
			document.getElementById("password1").style.color='#fff';
			document.getElementById("body1").style.backgroundColor='#112';
			return false;
		}
	}