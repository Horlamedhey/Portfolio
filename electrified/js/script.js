// index switch
// function on() {
// 	document.getElementById('bulboff').src='images/bulbon.gif';
// 	document.getElementById('idxcover').style.backgroundColor='rgba(255,255,0,0.7)';
// 	document.getElementById('indexsect').style.color='rgba(10,10,10,0.8)';
// 	document.getElementById('indexsect1').style.color='rgba(10,10,10,0.8)';
// }
// function off() {
// 	document.getElementById('bulboff').src='images/bulboff.gif';
// 	document.getElementById('idxcover').style.backgroundColor='rgba(0,0,0,0.7)';
// 	document.getElementById('indexsect').style.color='#bbb';
// 	document.getElementById('indexsect1').style.color='#999';
// }
// }
//body function
// var	x = 0;
// function apc(secs){
// 	if (!x){
// 		document.getElementById('body2').style.backgroundColor='#bbb'
// 		document.getElementById('a1').style.color='#333';
// 		document.getElementById('a2').style.color='#333';
// 		document.getElementById('a3').style.color='#333';
// 		document.getElementById('a4').style.color='#333';
// 		x++;
// 	}
// 	else if (x==1){
// 		document.getElementById('body2').style.backgroundColor='#aaa'
// 		document.getElementById('a1').style.color='#444';
// 		document.getElementById('a2').style.color='#444';
// 		document.getElementById('a3').style.color='#444';
// 		document.getElementById('a4').style.color='#444';
// 		x++;
// 	}
// 	else if (x==2){
// 		document.getElementById('body2').style.backgroundColor='#999'
// 		document.getElementById('a1').style.color='#555';
// 		document.getElementById('a2').style.color='#555';
// 		document.getElementById('a3').style.color='#555';
// 		document.getElementById('a4').style.color='#555';
// 		x++;
// 	}
// 	else if (x==3){
// 	 	document.getElementById('body2').style.backgroundColor='#888';
// 	 	document.getElementById('a1').style.color='#666';
// 	 	document.getElementById('a2').style.color='#666';
// 	 	document.getElementById('a3').style.color='#666';
// 	 	document.getElementById('a4').style.color='#666';
// 	 	x++;
// 	 }
// 	 else if (x==4){
// 	 	document.getElementById('body2').style.backgroundColor='#777';
// 	 	document.getElementById('a1').style.color='#777';
// 	 	document.getElementById('a2').style.color='#777';
// 	 	document.getElementById('a3').style.color='#777';
// 	 	document.getElementById('a4').style.color='#777';
// 	 	x++;
// 	 }
// 	 else if (x==5){
// 	 	document.getElementById('body2').style.backgroundColor='#666';
// 	 	document.getElementById('a1').style.color='#888';
// 	 	document.getElementById('a2').style.color='#888';
// 	 	document.getElementById('a3').style.color='#888';
// 	 	document.getElementById('a4').style.color='#888';
// 	 	x++;
// 	 }
// 	 else if (x==6){
// 	 	document.getElementById('body2').style.backgroundColor='#555';
// 	 	document.getElementById('a1').style.color='#999';
// 	 	document.getElementById('a2').style.color='#999';
// 	 	document.getElementById('a3').style.color='#999';
// 	 	document.getElementById('a4').style.color='#999';
// 	 	x++;
// 	 }
// 	 else if (x==7){
// 	 	document.getElementById('body2').style.backgroundColor='#444';
// 	 	document.getElementById('a1').style.color='#aaa';
// 	 	document.getElementById('a2').style.color='#aaa';
// 	 	document.getElementById('a3').style.color='#aaa';
// 	 	document.getElementById('a4').style.color='#aaa';
// 	 	x++;
	 
// 	 }else if (x==8){
// 	 	document.getElementById('body2').style.backgroundColor='#333';
// 	 	document.getElementById('a1').style.color='#bbb';
// 	 	document.getElementById('a2').style.color='#bbb';
// 	 	document.getElementById('a3').style.color='#bbb';
// 	 	document.getElementById('a4').style.color='#bbb';
// 	 	x=0;
// 	 }
// 	 setTimeout("apc("+secs+")",((secs)*6000));
// }
// nav function
function navwid() {
	if (document.body.scrollTop>=500) {
		document.getElementById('nav').style.position='fixed';
		document.getElementById('nav').style.width='100%';
		document.getElementById('nav').style.float='none';
		document.getElementById('nav').style.backgroundColor='rgba(90,90,90,0.4';
		document.getElementById('a1').style.color='#111';
		document.getElementById('a2').style.color='#111';
		document.getElementById('a3').style.color='#111';
		document.getElementById('a4').style.color='#111';
		document.getElementById('a5').style.color='#111';
		document.getElementById('a6').style.color='#111';
		document.getElementById('a7').style.color='#111';
		document.getElementById('a8').style.color='#111';
	}
	else {
		document.getElementById('nav').style.position='unset';
		document.getElementById('nav').style.width='80%';
		document.getElementById('nav').style.float='left';
		document.getElementById('nav').style.backgroundColor='rgba(70,70,70,0.2)';
		document.getElementById('a1').style.color='#111';
		document.getElementById('a2').style.color='#111';
		document.getElementById('a3').style.color='#111';
		document.getElementById('a4').style.color='#111';
		document.getElementById('a5').style.color='#111';
		document.getElementById('a6').style.color='#111';
		document.getElementById('a7').style.color='#111';
		document.getElementById('a8').style.color='#111';
	}
}
function swapcolor1() {
	if (document.body.scrollTop>=500) {
		document.getElementById('nav').style.backgroundColor='rgba(70,70,70,0.8)';
		document.getElementById('a1').style.color='#bbb';
		document.getElementById('a2').style.color='#bbb';
		document.getElementById('a3').style.color='#bbb';
		document.getElementById('a4').style.color='#bbb';
		document.getElementById('a5').style.color='#bbb';
		document.getElementById('a6').style.color='#bbb';
		document.getElementById('a7').style.color='#bbb';
		document.getElementById('a8').style.color='#bbb';
}
	else {
		document.getElementById('nav').style.backgroundColor='#444';
		document.getElementById('a1').style.color='#bbb';
		document.getElementById('a2').style.color='#bbb';
		document.getElementById('a3').style.color='#bbb';
		document.getElementById('a4').style.color='#bbb';
		document.getElementById('a5').style.color='#bbb';
		document.getElementById('a6').style.color='#bbb';
		document.getElementById('a7').style.color='#bbb';
		document.getElementById('a8').style.color='#bbb';
}
}
function swapcolor2() {
	if (document.body.scrollTop>=500) {
		document.getElementById('nav').style.backgroundColor='rgba(70,70,70,0.2)';
		document.getElementById('a1').style.color='#aaa';
		document.getElementById('a2').style.color='#aaa';
		document.getElementById('a3').style.color='#aaa';
		document.getElementById('a4').style.color='#aaa';
		document.getElementById('a5').style.color='#aaa';
		document.getElementById('a6').style.color='#aaa';		
		document.getElementById('a7').style.color='#aaa';		
		document.getElementById('a8').style.color='#aaa';		
}
	else {
		document.getElementById('nav').style.backgroundColor='rgba(70,70,70,0.2)';
		document.getElementById('a1').style.color='#111';
		document.getElementById('a2').style.color='#111';
		document.getElementById('a3').style.color='#111';
		document.getElementById('a4').style.color='#111';
		document.getElementById('a5').style.color='#111';
		document.getElementById('a6').style.color='#111';		
		document.getElementById('a7').style.color='#111';		
		document.getElementById('a8').style.color='#111';		
}
}
// abtnav
function navwidabt() {
	if (document.body.scrollTop>=900) {
		document.getElementById('nav').style.position='fixed';
		document.getElementById('nav').style.width='100%';
		document.getElementById('nav').style.float='none';
		document.getElementById('nav').style.backgroundColor='rgba(90,90,90,0.45';
		document.getElementById('a1').style.color='#aaa';
		document.getElementById('a2').style.color='#aaa';
		document.getElementById('a3').style.color='#aaa';
		document.getElementById('a4').style.color='#aaa';
		document.getElementById('a5').style.color='#aaa';
		document.getElementById('a6').style.color='#aaa';		
		document.getElementById('a7').style.color='#aaa';		
		document.getElementById('a8').style.color='#aaa';		
	}
	else {
		document.getElementById('nav').style.position='unset';
		document.getElementById('nav').style.width='80%';
		document.getElementById('nav').style.float='left';
		document.getElementById('nav').style.backgroundColor='rgba(70,70,70,0.2)';
		document.getElementById('a1').style.color='#111';
		document.getElementById('a2').style.color='#111';
		document.getElementById('a3').style.color='#111';
		document.getElementById('a4').style.color='#111';
		document.getElementById('a5').style.color='#111';
		document.getElementById('a6').style.color='#111';		
		document.getElementById('a7').style.color='#111';		
		document.getElementById('a8').style.color='#111';		
	}
}
function swapcolorabt1() {
	if (document.body.scrollTop>=900) {
		document.getElementById('nav').style.backgroundColor='rgba(70,70,70,0.8)';
		document.getElementById('a1').style.color='#ccc';
		document.getElementById('a2').style.color='#ccc';
		document.getElementById('a3').style.color='#ccc';
		document.getElementById('a4').style.color='#ccc';
		document.getElementById('a5').style.color='#ccc';
		document.getElementById('a6').style.color='#ccc';		
		document.getElementById('a7').style.color='#ccc';		
		document.getElementById('a8').style.color='#ccc';		
}
	else {
		document.getElementById('nav').style.backgroundColor='#444';
		document.getElementById('a1').style.color='#bbb';
		document.getElementById('a2').style.color='#bbb';
		document.getElementById('a3').style.color='#bbb';
		document.getElementById('a4').style.color='#bbb';
		document.getElementById('a5').style.color='#bbb';
		document.getElementById('a6').style.color='#bbb';		
		document.getElementById('a7').style.color='#bbb';		
		document.getElementById('a8').style.color='#bbb';		
}
}
function swapcolorabt2() {
	if (document.body.scrollTop>=900) {
		document.getElementById('nav').style.backgroundColor='rgba(90,90,90,0.5';
		document.getElementById('a1').style.color='#aaa';
		document.getElementById('a2').style.color='#aaa';
		document.getElementById('a3').style.color='#aaa';
		document.getElementById('a4').style.color='#aaa';
		document.getElementById('a5').style.color='#aaa';
		document.getElementById('a6').style.color='#aaa';		
		document.getElementById('a7').style.color='#aaa';		
		document.getElementById('a8').style.color='#aaa';		
}
	else {
		document.getElementById('nav').style.backgroundColor='rgba(70,70,70,0.2)';
		document.getElementById('a1').style.color='#111';
		document.getElementById('a2').style.color='#111';
		document.getElementById('a3').style.color='#111';
		document.getElementById('a4').style.color='#111';
		document.getElementById('a5').style.color='#111';
		document.getElementById('a6').style.color='#111';		
		document.getElementById('a7').style.color='#111';		
		document.getElementById('a8').style.color='#111';		
}
}
// home searchbox
function search() {
	document.searchform.searchbox.focus();
	}
function Search() {
	if (document.searchform.searchbox.value=="") {
		alert("you have input an invalid keyword!");
		document.searchform.searchbox.focus();
		return false;
	}
	
	}
// form function
function validate() {
		if (document.myform.name.value=="") {
			alert("Please fill all empty fields!");
			document.myform.name.focus();
			document.getElementById("name").style.backgroundColor='#334';
			document.getElementById("name").style.color='#fff';
			return false;
		}
		else if (document.myform.dob.value=="") {
			alert("Please fill all empty fields!");
			document.myform.dob.focus();
			document.getElementById("DoB").style.backgroundColor='#334';
			document.getElementById("DoB").style.color='#fff';
			return false;
		}
		else if (document.myform.username.value=="") {
			alert("Please fill all empty fields!");
			document.myform.username.focus();
			document.getElementById("username").style.backgroundColor='#334';
			document.getElementById("username").style.color='#fff';
			return false;
		}
		else if (document.myform.email.value=="") {
			alert("Please fill all empty fields!");
			document.myform.email.focus();
			document.getElementById("email").style.backgroundColor='#334';
			document.getElementById("email").style.color='#fff';
			return false;
		}
		else if (document.myform.password.value=="") {
			alert("Please fill all empty fields!");
			document.myform.password.focus();
			document.getElementById("password").style.backgroundColor='#334';
			document.getElementById("password").style.color='#fff';
			return false;
		}
		if (document.myform.re_password.value!=document.myform.password.value) {
			alert("password does not match!");
			document.myform.re_password.focus();
			document.getElementById("re_password").style.backgroundColor='#334';
			document.getElementById("re_password").style.color='#fff';
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
			document.getElementById("username1").style.backgroundColor='#334';
			document.getElementById("username1").style.color='#fff';
			return false;
		}
		else if (document.myform1.password1.value=="") {
			alert("Please fill all empty fields!");
			document.myform1.password1.focus();
			document.getElementById("password1").style.backgroundColor='#334';
			document.getElementById("password1").style.color='#fff';
			return false;
		}
	}