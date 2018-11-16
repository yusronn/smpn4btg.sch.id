<html>
<head>
<title>
Hacked ??
</title>
<link rel="SHORTCUT ICON" href="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR1eyMAHjAK8RvjXiFWCUMtwh4r-Idf5Xl8q4h2IButNltbh9Li" type="image/gif">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<meta name="keywords" content="Hacked ?"/>
<meta name="description" content="Mr.J0N3$$\ Stay Here !">
<meta name="author" content="Mr.J0N3$$\">
<meta name="googlebot" content="all,index,follow">
<meta name="robots" content="index, follow">
<meta contact=''/>
<script>alert("Zhuahahahah")</script>
<script type="text/javascript">

var snowmax=70
var snowcolor=new Array("white","red","white","red","white")
var snowtype=new Array("Arial Black","Arial Narrow","Times","Comic Sans MS")
var snowletter="."
var sinkspeed=1
var snowmaxsize=20
var snowminsize=8
var snowingzone=1

// Do not edit below this line
var snow=new Array()
var marginbottom
var marginright
var timer
var i_snow=0
var x_mv=new Array();
var crds=new Array();
var lftrght=new Array();
var browserinfos=navigator.userAgent 
var ie5=document.all&&document.getElementById&&!browserinfos.match(/Opera/)
var ns6=document.getElementById&&!document.all
var opera=browserinfos.match(/Opera/)  
var browserok=ie5||ns6||opera

function randommaker(range) {		
	rand=Math.floor(range*Math.random())
    return rand
}

function initsnow() {
	if (ie5 || opera) {
		marginbottom = document.body.clientHeight
		marginright = document.body.clientWidth
	}
	else if (ns6) {
		marginbottom = window.innerHeight
		marginright = window.innerWidth
	}
	var snowsizerange=snowmaxsize-snowminsize
	for (i=0;i<=snowmax;i++) {
		crds[i] = 0;                      
    	lftrght[i] = Math.random()*15;         
    	x_mv[i] = 0.03 + Math.random()/10;
		snow[i]=document.getElementById("s"+i)
		snow[i].style.fontFamily=snowtype[randommaker(snowtype.length)]
		snow[i].size=randommaker(snowsizerange)+snowminsize
		snow[i].style.fontSize=snow[i].size
		snow[i].style.color=snowcolor[randommaker(snowcolor.length)]
		snow[i].sink=sinkspeed*snow[i].size/5
		if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
		if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
		if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
		if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
		snow[i].posy=randommaker(2*marginbottom-marginbottom-2*snow[i].size)
		snow[i].style.left=snow[i].posx
		snow[i].style.top=snow[i].posy
	}
	movesnow()
}

function movesnow() {
	for (i=0;i<=snowmax;i++) {
		crds[i] += x_mv[i];
		snow[i].posy+=snow[i].sink
		snow[i].style.left=snow[i].posx+lftrght[i]*Math.sin(crds[i]);
		snow[i].style.top=snow[i].posy
		
		if (snow[i].posy>=marginbottom-2*snow[i].size || parseInt(snow[i].style.left)>(marginright-3*lftrght[i])){
			if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
			if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
			if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
			if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
			snow[i].posy=0
		}
	}
	var timer=setTimeout("movesnow()",50)
}

for (i=0;i<=snowmax;i++) {
	document.write("<span id='s"+i+"' style='position:absolute;top:-"+snowmaxsize+"'>"+snowletter+"</span>")
}
if (browserok) {
	window.onload=initsnow
}
</script>
<script language="javascript">
document.onmousedown=disableclick;
status="Right Click Disabled";
Function disableclick(e)
{
  if(event.button==2)
   {
     alert(status);
     return false;  
   }
}
</script>
<style>

         body {
         background	: #000;
         background-image: url(No image);
         background-repeat:no-repeat;
         background-attachment: fixed;
         background-size: 1350px;
         font-family	: Courier new;
         text-align	: center;
         color		: #fff;
         }
         pre {
         margin-top: 9%;
         }.error {
  text-align: center;
  font-family: 'Gilda Display', serif;
  -webkit-animation: noise-3 1s linear infinite;
          animation: noise-3 1s linear infinite;
  overflow: default;
}


.info {
  text-align: center;
  width: 200px;
  height: 60px;
  margin: auto;
  position: absolute;
  top: 280px;
  bottom: 0;
  left: 20px;
  right: 0;
  -webkit-animation: noise-3 1s linear infinite;
          animation: noise-3 1s linear infinite;
}


.info:after {
  content: 'OWNED';
  font-family: OCR-A;
  font-size: 100px;
  text-align: center;
  width: 800px;
  margin: auto;
  position: absolute;
  top: 20px;
  bottom: 0;
  left: 40px;
  right: 0;
  opacity: 0;
  color: white;
  -webkit-animation: noise-1 .2s linear infinite;
          animation: noise-1 .2s linear infinite;
}

@-webkit-keyframes noise-1 {
  0%, 20%, 40%, 60%, 70%, 90% {opacity: 0;}
  10% {opacity: .1;}
  50% {opacity: .5; left: -6px;}
  80% {opacity: .3;}
  100% {opacity: .6; left: 2px;}
}

@keyframes noise-1 {
  0%, 20%, 40%, 60%, 70%, 90% {opacity: 0;}
  10% {opacity: .1;}
  50% {opacity: .5; left: -6px;}
  80% {opacity: .3;}
  100% {opacity: .6; left: 2px;}
}

@-webkit-keyframes noise-2 {
  0%, 20%, 40%, 60%, 70%, 90% {opacity: 0;}
  10% {opacity: .1;}
  50% {opacity: .5; left: 6px;}
  80% {opacity: .3;}
  100% {opacity: .6; left: -2px;}
}

@keyframes noise-2 {
  0%, 20%, 40%, 60%, 70%, 90% {opacity: 0;}
  10% {opacity: .1;}
  50% {opacity: .5; left: 6px;}
  80% {opacity: .3;}
  100% {opacity: .6; left: -2px;}
}

@-webkit-keyframes noise {
  0%, 3%, 5%, 42%, 44%, 100% {opacity: 1; -webkit-transform: scaleY(1); transform: scaleY(1);}  
  4.3% {opacity: 1; -webkit-transform: scaleY(1.7); transform: scaleY(1.7);}
  43% {opacity: 1; -webkit-transform: scaleX(1.5); transform: scaleX(1.5);}
}

@keyframes noise {
  0%, 3%, 5%, 42%, 44%, 100% {opacity: 1; -webkit-transform: scaleY(1); transform: scaleY(1);}  
  4.3% {opacity: 1; -webkit-transform: scaleY(1.7); transform: scaleY(1.7);}
  43% {opacity: 1; -webkit-transform: scaleX(1.5); transform: scaleX(1.5);}
}

@-webkit-keyframes noise-3 {
  0%,3%,5%,42%,44%,100% {opacity: 1; -webkit-transform: scaleY(1); transform: scaleY(1);}
  4.3% {opacity: 1; -webkit-transform: scaleY(4); transform: scaleY(4);}
  43% {opacity: 1; -webkit-transform: scaleX(10) rotate(60deg); transform: scaleX(10) rotate(60deg);}
}

@keyframes noise-3 {
  0%,3%,5%,42%,44%,100% {opacity: 1; -webkit-transform: scaleY(1); transform: scaleY(1);}
  4.3% {opacity: 1; -webkit-transform: scaleY(4); transform: scaleY(4);}
  43% {opacity: 1; -webkit-transform: scaleX(10) rotate(60deg); transform: scaleX(10) rotate(60deg);}
}

.wrap {
  top: 30%;
  left: 25%;
  
  height: 200px;
  
  margin-top: -100px;
  position: absolute;
}
code {
  color: white;
}
span.blue {
  color: #48beef;
}
span.comment {
  color: #7f8c8d;
}
span.orange {
  color: #f39c12;
}
span.green {
  color: #33cc33;
}

.viewFull {
  font-family:OCR-A;
  color:orange;
  text-decoration:;
}

	
}

 @media only screen and (min-height: 500px) {

.viewFull{
  display:none; 	
	}

}
	</style>
<style>
body {
    background-color: black;
    text-shadow:5px 5px 14px red;
}
a:link, a:visited {
    
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}

a:hover, a:active {
    color: maroon;
}
img {
animation-name: rotate ;
animation-duration: 5s;
animation-play-state: running;
animation-timing-function: linear;
animation-iteration-count: infinite;
opacity: 0.8;filter: alpha(opacity=50);} img:hover {opacity: 1.0;filter: alpha(opacity=100);}

@keyframes rotate{
10% {transform:rotateY(36deg)}
20% {transform:rotateY(72deg)}
30% {transform:rotateY(108deg)}
40% {transform:rotateY(144deg)}
50% {transform:rotateY(180deg)}
60% {transform:rotateY(216deg)}
70% {transform:rotateY(252deg)}
80% {transform:rotateY(288deg)}
90% {transform:rotateY(324deg)}
100% {transform:rotateY(360deg)}
}

</style>
<style type="text/css">
		img{width: 270px;max-width: 100%;}
		h1{letter-spacing: -2px;}
		h1,p{max-width:100%;width: 820px;margin: 0 auto;display: block;}
		.ndivic404animasi{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both}.ndivic404animasi.infinite{-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite}
		.ndivic404animasi:hover{-webkit-animation-duration:0.1s;animation-duration:0.1s;}
		@-webkit-keyframes ndivic404anim1{from,20%,40%,60%,80%,to{-webkit-animation-timing-function:cubic-bezier(0.215,0.610,0.355,1.000);animation-timing-function:cubic-bezier(0.215,0.610,0.355,1.000)}0%{opacity:0;-webkit-transform:scale3d(.3,.3,.3);transform:scale3d(.3,.3,.3)}20%{-webkit-transform:scale3d(1.1,1.1,1.1);transform:scale3d(1.1,1.1,1.1)}40%{-webkit-transform:scale3d(.9,.9,.9);transform:scale3d(.9,.9,.9)}60%{opacity:1;-webkit-transform:scale3d(1.03,1.03,1.03);transform:scale3d(1.03,1.03,1.03)}80%{-webkit-transform:scale3d(.97,.97,.97);transform:scale3d(.97,.97,.97)}to{opacity:1;-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}}@keyframes ndivic404anim1{from,20%,40%,60%,80%,to{-webkit-animation-timing-function:cubic-bezier(0.215,0.610,0.355,1.000);animation-timing-function:cubic-bezier(0.215,0.610,0.355,1.000)}0%{opacity:1;-webkit-transform:scale3d(1.0,1.0,1.0);transform:scale3d(1.0,1.0,1.0)}20%{-webkit-transform:scale3d(1.1,1.1,1.1);transform:scale3d(1.1,1.1,1.1)}40%{-webkit-transform:scale3d(.9,.9,.9);transform:scale3d(.9,.9,.9)}60%{opacity:1;-webkit-transform:scale3d(1.03,1.03,1.03);transform:scale3d(1.03,1.03,1.03)}80%{-webkit-transform:scale3d(.97,.97,.97);transform:scale3d(.97,.97,.97)}to{opacity:1;-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}}.ndivic404anim1{-webkit-animation-name:ndivic404anim1;animation-name:ndivic404anim1}
		@font-face{font-family:'Allerta Stencil';font-style:normal;font-weight:400;src:local('Allerta Stencil Regular'),local(AllertaStencil-Regular),url(https://fonts.gstatic.com/s/allertastencil/v7/CdSZfRtHbQrBohqmzSdDYHyjZGU_SYMIAZWjSGDHnGA.woff2) format("woff2");unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215,U+E0FF,U+EFFD,U+F000}
	</style>
</head>
<body></head>
<body oncontextmenu="return false;" onkeydown="return false;" onmousedown="return false;" ondragstart="return false" onselectstart="return false" style="-moz-user-select: none; cursor: default;">
<iframe width="0%" height="0" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/314167536&auto_play=true&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&visual=true"></iframe>
<style type="text/css">body,a:hover{cursor:url(http://cur.cursors-4u.net/others/oth-7/oth639.cur),progress!important;}</style></a> <img src="https://images.techhive.com/images/article/2014/08/black-hat-logo-100410196-primary.idge.jpg"> <br><br>
 <center>
 
<link href='http://fonts.googleapis.com/css?family=Jolly+Lodger' rel='stylesheet' type='text/css'>

<link href='https://fonts.googleapis.com/css?family=Audiowide|Space+Mono' rel='stylesheet'> 

<link href='http://fonts.googleapis.com/css?family=Amatic SC' rel='stylesheet' type='text/css'> 

<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Megrim' rel='stylesheet' type='text/css'><style type="text/css"></style>

  <font face="jolly lodger" size="5">
<font color="white"><<font color="red">/<font color="white">>
<font color="red">Touched By Mr.J0N3$$\
<font color="white"><<font
color="red">/<font color="white">></font>
<br><br><br>
<font size='1'color="#FFFFFF">&#174; Indonesian Hacker Rulez <br>
<font size='1'color="#FFFFFF">&#174; 2017
 </font>
<br>
<a href='http://miror.sapleaders.com/notify.php'>
<font size="5" color="red">Skill ku Bukan Urusan mu !!<br>copyright Pecandu Ganja</font>
<br><br><br><br><br>
<font size="3" color="white">My friends : <br>Mr.Jho-Acill-NightBoy-Mr.B4ND1T-Mr.Kisut-BL4CKC4TD34D-F1N1Q-POWER BANK-Ms.Xyn-.//D3Z7R0Y++-Dyzz-Hellme-Mr.SoUrchID-Mr.Cr4Zy-L3M4R1-Mr.Xword!- Ms-5QU15H1-#root@-Toku:~#-Fake-Syst3m -./Ikari404 <br> And All Defacer Indonesia

</br></font>
</center>
<script language=JavaScript> var message="Hey . Hey . madafaka !! Mr.J0N3$$\ Stay Here !!"; function clickIE4(){ if (event.button==1){ alert(message); return false; } } function clickNS4(e){ if (document.layers||document.getElementById&&!document.all){ if (e.which==2||e.which==3){ alert(message); return false; } } } if (document.layers){ document.captureEvents(Event.MOUSEDOWN); document.onmousedown=clickNS4; } else if (document.all&&!document.getElementById){ document.onmousedown=clickIE4; } document.oncontextmenu=new Function("alert(message);return false")</script><br /><!-- End of Blocking mouse--></center> </body> </html>  
