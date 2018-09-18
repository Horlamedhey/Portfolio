$("document").ready(function() {
	$("#contact").click(function(){
	$("#name").focus();
});
	$("#submit").click(function() {
		 $("#submit").removeClass("fadeIn");
		 $("#submit").addClass("bounce");
		 $("#submit").css("animation-iteration-count","infinite");
		 $("#submit").css("animation-duration","2s");
	});
	$("#info").click(function() {
		 $(".modal").toggle();
		 $("#modal div div").html('<img src="images/1-1.jpg">');
		 $("#modal div h2").html('PAUL-VALENTINE');
		 $("#modal div .link").html('<a href="paul-valentine/index.html" id="go" target="_blank"><button class="go">GO <i class="fa fa-arrow-right"></i></button></a>');
		 $("#modal").addClass("fadeInLeft");
	});
	$("#info1").click(function() {
		 $(".modal").toggle();
		 $("#modal div div").html('<img src="images/volt.jpg">');
		 $("#modal div h2").html('VOLTAGE');
		 $("#modal div .link").html('<a href="voltage/index.html" id="go" target="_blank"><button class="go">GO <i class="fa fa-arrow-right"></i></button></a>');
		 $("#modal").addClass("fadeInLeft");
	});
	$("#info2").click(function() {
		 $(".modal").toggle();
		 $("#modal div div").html('<img src="images/30.jpeg">');
		 $("#modal div h2").html('ELECTRIFIED');
		 $("#modal div .link").html('<a href="electrified/index.html" id="go" target="_blank"><button class="go">GO <i class="fa fa-arrow-right"></i></button></a>');
		 $("#modal").addClass("fadeInLeft");
	});
	$("#info4").click(function() {
		 $(".modal").toggle();
		 $("#modal div div").html('<img src="images/14.jpg">');
		 $("#modal div h2").html('STARTER');
		 $("#modal div .link").html('<a href="starter/home.html" id="go" target="_blank"><button class="go">GO <i class="fa fa-arrow-right"></i></button></a>');
		 $("#modal").addClass("fadeInLeft");
	});
	$("#info5").click(function() {
		 $(".modal").toggle();
		 $("#modal div div").html('<img src="images/spiccy.jpg">');
		 $("#modal div h2").html('SPICCY');
		 $("#modal div .link").html('<a href="spiccy/index.html" id="go" target="_blank"><button class="go">GO <i class="fa fa-arrow-right"></i></button></a>');
		 $("#modal").addClass("fadeInLeft");
	});
	$("#info7").click(function() {
		 $(".modal").toggle();
		 $("#modal div div").html('<img src="images/30.jpeg">');
		 $("#modal div h2").html('ELECTRIFIED-MOBILE');
		 $("#modal div .link").html('<a href="electrified-mobile/index.php" id="go" target="_blank"><button class="go">GO <i class="fa fa-arrow-right"></i></button></a>');
		 $("#modal").addClass("fadeInLeft");
	});
	$("#info10").click(function() {
		 $(".modal").toggle();
		 $("#modal div div").html('<img src="images/21.jpg">');
		 $("#modal div h2").html('STEP');
		 $("#modal div .link").html('<a href="step/index.php" id="go" target="_blank"><button class="go">GO <i class="fa fa-arrow-right"></i></button></a>');
		 $("#modal").addClass("fadeInLeft");
	});
	$("#info11").click(function() {
		 $(".modal").toggle();
		 $("#modal div div").html('<img src="images/22.jpg">');
		 $("#modal div h2").html('PAYSLIP');
		 $("#modal div .link").html('<a href="payslip/index.html" id="go" target="_blank"><button class="go">GO <i class="fa fa-arrow-right"></i></button></a>');
		 $("#modal").addClass("fadeInLeft");
	});
	$("#info12").click(function() {
		 $(".modal").toggle();
		 $("#modal div div").html('<img src="images/note.jpg">');
		 $("#modal div h2").html('NOTEMASTER');
		 $("#modal div .link").html('<a href="notemaster/index.html" id="go" target="_blank"><button class="go">GO <i class="fa fa-arrow-right"></i></button></a>');
		 $("#modal").addClass("fadeInLeft");
	});
	$("#close").click(function() {
		 $(".modal").toggle();
		 $("#modal").removeClass("fadeInLeft");
	});
	$("#navtoggle").click(function () {
		$('#navlinkdiv').slideToggle();
	});
});
// var w = document.contact.name.value=="";
// var x = document.contact.email.value=="";
// var y = document.contact.tel.value=="";
// var z = document.contact.message.value=="";
// var a = document.getElementById('submit');
function validate() {
if (document.form.name.value=="") {
	alert("please input a valid entry!");
	 document.form.name.focus();
	return false;
}
else if(document.form.email.value=="") {
	alert("please input a valid entry!");
	 document.form.email.focus();
	return false;
}
else if(document.form.message.value=="") {
	alert("please input a valid entry!");
	 document.form.message.focus();
	return false;
}
else{
	 document.getElementById('submit').style.display ="block";
	 document.getElementById('valid').style.display ="none";
	return true;
}
  }
// function nav() {
// 	if (document.body.scrollTop>=500) {
// 		document.getElementById("head").style.position='fixed';
// 		document.getElementById("head").style.width='100%';
// 		document.getElementById("head").style.backgroundColor='rgba(200,0,120,0.4)';
// 	}
// 	else{
// 		document.getElementById("head").style.position='relative';
// 		document.getElementById("head").style.backgroundColor='#d0f';
// 	}
// }
// function color(){
// 	if (document.body.scrollTop>=500) {
// 		document.getElementById("head").style.backgroundColor='#d0f';
// 	}
// }
// function colorout(){
// 	if (document.body.scrollTop>=500) {
// 		document.getElementById("head").style.backgroundColor='rgba(200,0,120,0.4)';
// 	}
// }