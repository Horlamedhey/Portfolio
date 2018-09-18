<?php 
		if (@$_GET['login']=="false") {
			echo "<div class='noacct'>Sorry, you do not have an account yet...Fill the form below to create one!</div>";
		} ?>




		body
{
	width:100%;
	height:100vh;
	overflow-x:hidden;
	margin: 0;
	padding: 0;
	background-color: #112;
	transition-timing-function: linear;
}
/*index*/
.indexbg
{
	width: 100%;
	height: 100vh;
	background-image: url(../images/30.jpeg);
	background-size: cover;
	position: fixed;
}
#indexbg
{
	animation-delay: 0.2s
}
.idxcover
{
	width: 100%;
	height:100vh;
	background-color: rgba(0,0,0,0.7);
	position: fixed;
}
#idxcover
{
	animation-delay: 1.1s;
}
.indexsect
{
	max-width: 100%;
    max-height: 14.2vh;
    color: #bbb;
}
.electrified
{
	max-width: 100%;
    max-height: 6.85vh;
    line-height: 7.18vh;
    text-align: center;
    font-size: 6vw;
    font-family: algerian;
    margin-top: 1em;
}
#electrified
{
	animation-delay:2.2s;
}
.blink
{
	animation:blinker 5s linear infinite;
	animation-delay:3s;
}
@keyframes blinker
{
	50%{opacity: 0.5;}
}
.lightup
{
	font-size: 1.7vw;
    text-align: center;
    max-height: 3vh;
    margin-top: 1em;
    font-family: sans-serif;	
}
#lightup
{
	animation-delay:2.2s;
}
.getdiv
{
	max-height: 8vh;
    width: 25%;
    margin-top: 18vh;
    margin-left: 37.5%;
}
.getbut
{
	max-height: 8vh;
    max-width: 100%;
    background-color: rgba(0,0,0,0.1);
    color: #bbb;
    font-size: 3.3vw;
    font-family: serif;
    padding: 0.3em;
    line-height: 4vh;
    cursor: auto;
    border-style: groove;
    border-width: 0.05vw;
}
#getdiv
{
	animation-delay: 3.7s;
	animation-duration: 1.5s;
}
#getbut
{
	animation-delay: 5.3s;
	animation-duration: 0.5s;
}
#getlink
{
	animation-duration: 0.7s;
}
.indexsect1
{
	max-width: 40%;
    max-height: 6vh;
    margin-left: 5%;
    color: #999;
    font-family: chiller;
}
#indexsect1 div
{
	animation-delay: 3s;
}
#tope
{
	margin-top: 7em;
}
#tope,#sola,#segun,#ajao
{
	font-size: 1.6vw;
}
/*logo, nav & company name*/
.logo
{
	width: 20%;
	height: 13vh;
	margin: 0; 
	float: left;
}
#logo
{
	animation-delay: 4s;
}
#logodiv
{
	animation-delay: 3s;
}

nav
{
	width: 80%;
	height: 13vh;
	text-align: center;
	box-shadow: 0px 8px 16px rgba(0,0,0,0.15);
	background-color: rgba(70,70,70,0.2);
	line-height: 13vh;
	animation-delay: 2.2s;
	float: left;
	z-index:1;
	top: 0;
}
a
{
	text-decoration: none;
}
nav a
{
	text-decoration:none;
	padding: 0.5em;
	padding-left:2.2em;
	padding-right:2.2em;
	color: #aaa;
	font-family: serif;
	font-size:1.7vw;
	font-style: italic;
	border-right-width: 0.08vw;
	border-right-color: #444;
	border-right-style: solid;
	transition-duration: 1s;
	transition-timing-function: linear;
}
nav:hover a
{
	color: #bbb;
	border-right-color: #bbb;
}
nav:hover
{
	background-color: #444;
}
.ent
{
	text-align: center;
	background-color:#444;
	height: 8vh;
	width: 100%;
	line-height: 8vh;
	font-size: 2vw;
	font-family: cursive;
	color: #aaa;
	margin-bottom: 0.3vh;
	letter-spacing: 0.2vw;
	text-shadow: 4px 4px 4px gray;
	animation-delay:0.5s; 
}
.ent div
{	
	animation-delay:1.1s;
}
/*home*/
.searchdiv
{
	width: 100%;
	height: 3vh;
	text-align: center;
	margin-top: 7vh;
	float: left;
}
#searchdiv
{
	animation-delay: 5s;
}
.searchdiv form input
{
	height:5vh;
	margin-top: 0.2vh;
	border-style: groove;
	border-color:#112;
	border-width: 0.3vw;
	color: #666666;
}
#searchbox
{
	width: 70%;
	font-style: italic;
	font-size: 1.5vw;
	margin-left:13%; 
}
#go
{
	background-color: rgba(70,70,70,0.2);
	color: #888;
	font-size: 1.2vw;
	margin-top: 0.5vh;
	box-shadow: 0px 3px 3px;
	width: 3vw;
	height: 4.5vh;
}
#go:hover
{
	background-color: #556;
	transition:1s linear all;
	color: #112;
}
.store
{
	overflow: hidden;
	float: left;
}
.store figure
{
	position: relative;
	height: 21vh;
	width: 500%;
	margin: 0;
	left: 0;
	animation: 40s store infinite linear;
}
.store figure img
{
	height: 100%;
	width: 3.9%;
	margin-right: 0.1%;
	float: left;
	box-shadow: 0px 8px 16px;
}
@keyframes store
{
	0%
	{
		left: 0;
	}
	10%
	{
		left: 0;
	}
	20%
	{
		left: -100%;
	}
	30%
	{
		left: -100%;
	}
	40%
	{
		left: -200%;
	}
	50%
	{
		left: -200%;
	}
	60%
	{
		left: -300%;
	}
	70%
	{
		left: -300%;
	}
	80%
	{
		left: -400%;
	}
	90%
	{
		left: -400%;
	}
	100%
	{
		left: -500%;
	}
}
#store1
{
	animation-delay: 7s;
	animation-duration: 2s;
}
#store2
{
	animation-delay: 6s;
	animation-duration: 2s;
}
.sect1
{
	margin-top: 20vh;
	margin-right: 0;
	margin-left: 0;
	float: left;
	position: relative;
	color: #666;
}
.hmdiv1
{
	border-bottom-width: 0.06vh;
	border-bottom-color:#777;
	border-bottom-style:ridge;
}
.hmdiv3
{
	border-top-width: 0.06vh;
	border-top-color:#777;
	border-top-style:ridge;
}
.hmdiv3, .hmdiv1
{
	padding-right: 7%;
	border-right-width: 0.06vw;
	border-right-color:#777;
	border-right-style:ridge;
}
.hmdiv2
{
	border-bottom-width: 0.06vh;
	border-bottom-color:#777;
	border-bottom-style:ridge;
}
.hmdiv4
{
	border-top-width: 0.06vh;
	border-top-color:#777;
	border-top-style:ridge;
}
.hmdiv4, .hmdiv2
{
	padding-left: 7%;
	border-left-width: 0.06vw;
	border-left-color:#777;
	border-left-style:ridge;
}
.hmheadings
{
	font-size: 2.5vw;
	margin-top: 5vh;
}
.imgfig
{
	max-width: 16vw;
	max-height: 10vh;
	margin-right: 1%;
	margin-bottom: 2vh;
	margin-top: 3vh;
}
.hmp
{
	margin-bottom: 3vh;
	font-size:1.7vw;
	clear: left;
	line-height: 2.3vh;
}
.line1, .line2, .line3
{
	height: 0.3vh;
	width: 100%;
	background-color:#444;
	position: relative;
	float: left;
	margin-top: 8vh;
}
.line2
{
	margin-top: 0;
}
.line3
{
	margin-top: 8.4vh;
}
/*About us*/
.abtus,.team
{
	text-align: center;
	margin-top: 20vh;
	font-size: 3vw;
	color: #777;
	background-color: #222;
	text-shadow: 0px 4px 8px;
}
#abtus
{
	animation-duration: 2s;
	animation-delay: 0.2s;
}
#abtimg
{
	animation-duration: 2s;
	animation-delay: 1.2s;
}
.abtimg
{
	margin-top: 6vh;
	height: 50vh;
}
.abtdiv
{
	color: #bbb;
	margin-top: 8vh;
}
.abtcntntdiv
{
	margin-top: 1vh;
	background-color: #444;
	height: 50vh;
}
.abthead
{
	font-size: 1.9vw;
	font-family: monospace;
	margin-top: 10vh;
}
.abtxts
{
	font-size: 1.4vw;
	line-height: 3vh;
}
.cntntimgs
{
	height: 35vh;
	margin-top: 7.5vh;
}
.team
{
	margin-top: 30vh;
}
.teamdiv
{
	background-color: #444;
	position: absolute;
}
.teambg1
{
	height: 18vh;
	margin-top: 8vh;
}
.teambg1 img
{
	height: 100%;
	width: 100%;
}
.teamdetails
{
	color: #888;
	background-color: #222;
	font-size: 1.3vw;
	line-height: 2vh;
	text-align: center;
}
/*contact*/
.contactdiv
{
	font-size: 3vw;
	margin-top: 22vh;
	font-family: verdana;
	color: #666;
	text-shadow: 0px 4px 8px;
}
#contactdiv
{
	animation-duration: 2s;
	animation-delay: 0.2s;
}
#contactform
{
	width: 60vw;
	margin-top: 7vh;
	margin-left: 20vw;
}
.conname,.conemail,.subject
{
	padding: 1vw;
	border-radius: 2vw;
	display: block;
	margin-top: 2vh;
	width: 40vw;
	border:0;
	outline: 0;
	box-shadow: 0px 1px 1px;
	resize: none;
	margin-left: 10vw;
	background-color: #eee;
	font-size: 1.5vw;
}
.conname
{
	margin-top: 0vh;
}
.conname:focus
{
	box-shadow: 0px 4px 8px rgba(225,225,225,0.5);
}
.conemail:focus
{
	box-shadow: 0px 4px 8px rgba(225,225,225,0.5);
}
.subject:focus
{
	box-shadow: 0px 4px 8px rgba(225,225,225,0.5);
}
.message:focus
{
	box-shadow: 0px 4px 8px rgba(225,225,225,0.5);
}
#conname,#conemail,#subject,#message,#send
{
	animation-duration:1.8s;
}
#conname
{
	animation-delay: 0.5s;
}
#conemail
{
	animation-delay: 0.7s;
}
#subject
{
	animation-delay: 0.9s;
}
#message
{
	animation-delay: 1.1s;
}
#contactform textarea
{
	font-size: 1.2vw;
}
.message
{
	padding: 1vw;
	border-radius: 1vw;
	margin-top: 3vh;
	border:0;
	outline: 0;
	box-shadow: 0px 1px 1px;
	resize: none;
	height: 22vh;
	margin-left: 10vw;
	width: 30vw;
	background-color: #eee;
	font-size: 1.5vw;
}
#send
{
	background-color: rgba(0, 153, 153, 0.2);
	cursor: pointer;
	font-size: 2vw;
	padding: 0.1vw;
	margin-top: 22vh;
	margin-bottom: 0;
	border-radius: 1vw;
	border:0;
	outline: 0;
	width: 10vw;
	box-shadow: 0px 1px 1px;
	animation-delay: 2.5s;
}
#send:hover
{
	box-shadow: 1px 4px 8px #009999;
}
/*login/register*/
.form
{
	text-align: center;
	margin-top: 15vh;
}
.signdiv
{
	font-size: 4.4vw;
	color: #666;
	animation-duration: 2s;
	position: relative;
	text-shadow: 0px 4px 8px;
}
.logdiv
{
	margin-top: 30vh;
}
.inputdiv
{
	margin-top: 6vh;
}
.input
{
	background-color: #eee;
	color: #003366;
	padding: 0.7vw;
	border-radius: 0.5vw;
	display: block;
	margin-top: 3vh;
	width: 100%;
	border:0;
	outline: 0;
	box-shadow: 0px 1px 1px;
	text-align: center;
	font-size: 1.5vw;
}
input:focus
{
	box-shadow: 0px 4px 8px rgba(225,225,225,0.5);
}
#name
{
	animation-delay: 0.5s;
}
#DoB
{
	animation-delay: 0.7s;
}
#username
{
	animation-delay: 0.9s;
}
#username1
{
	animation-delay: 0.6s;
}
#email
{
	animation-delay: 1.1s;
}
#password
{
	animation-delay: 1.3s;
}
#password1
{
	animation-delay: 0.8s;
}
#re_password
{
	animation-delay: 1.5s;
}
#register
{
	animation-delay: 1.7s;
}
#login
{
	animation-delay: 1s;
}
#register,#login
{
	width: 10vw;
	margin-left: 12vw;
	border-radius: 1vw;
	cursor: pointer;
}
#login:hover
{
	box-shadow: 0px 4px 8px rgba(225,225,225,0.5);
}
#register:hover
{
	box-shadow: 0px 4px 8px rgba(225,225,225,0.5);
}
#DoB
{
	text-indent: 2vw;
}
.noacct
{
	background-color: rgba(255,20,20,1);
	position: relative;
	margin-top: 20vh;
	margin-bottom: 5vh;
	width: 20%;
	text-align: center;
	margin-left: 40%;
	font-size: 1.5vw;
}
/*footer*/
.footer
{
	text-align: center;
	background-color: #444;
	color: #ccc;
	width: 100%;
	float: left;
	position: relative;
	margin-top: 20vh;
	bottom: 0;
}
.abtfooter
{
	margin-top: 150vh;
	bottom: 0;
}
.formfooter
{
	margin-top: 14.85vh;
	bottom: 0;
}
.logfooter
{
	margin-top: 24vh;
	bottom: 0;
}
.categories
{
	width: 100%;
	height: 4vh;
	font-family: serif;
	font-size: 3vw;
	letter-spacing: 0.2vw;
	line-height: 4vh;
	margin-top: 3vh;
}
.catlist
{
	width: 100%;
	margin-top: 5vh;
}
.headlist
{5height: 2.5vh;
	font-family: serif;
	font-size: 2vw;
	letter-spacing: 0.2vw;
}
.listdiv ul li
{
	list-style-type:none;
	font-family: serif;
	font-size: 1.2vw;
	text-indent: -4vw;
	line-height: 2vh;
}
.copydiv
{
	margin-top: 38vh;
	font-size: 1.5vw;
	clear: both;
}
.abtcopydiv
{
	margin-top: 10vh;
	font-size: 1.5vw;
	clear: both;
}
.iconsubdiv
{
	float: left;
	margin-left: 35.5%;
}
.map,.top
{
	color: inherit;
	float: left;
	font-size: 1.5vw;
}
.map
{
	margin-left: 3%;
}
.top
{
	margin-left: 39%;
}
.icondiv
{
	clear: both;
	margin-top: 35vh;
	width: 100%;
}
.abticondiv
{
	margin-top: 1vh;
	width: 100%;
}
.iconsubdiv i
{
	padding: 0.5vw;
	font-size: 1.2vw;
}