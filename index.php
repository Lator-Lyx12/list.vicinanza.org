<html>
<title> Touched By Hazee </title>
<!--------------- 
Hayo Ngapain 

Hazee Wm

xixixixiix ketauan 
--------------->
<script type="text/javascript">

var snowmax=35
var snowcolor=new Array("#AAAACC","#DDDDFF","#CCCCDD","#F3F3F3","#F0FFFF")
var snowtype=new Array("Arial Black","Arial Narrow","Times","Comic Sans MS")
var snowletter="*"
var sinkspeed=0.6
var snowmaxsize=22
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
<style type="text/css">
@import url("//fonts.googleapis.com/css?family=Audiowide|Audiowide&display=swap");
body{
  	 overflow:hidden;
  	 display: flex;
  	 align-items: center;
  	 justify-content: center;
  	 margin:0;
  	 padding:0;
  	 width:100%;
  	 background-color:#000;
  	 }
i{
margin:10px;
}
a:link{
color:#000;
}
h1{
	color: #000;
	text-decoration: none;
	border-radius:0px;
	border:0px;
	font-family: 'Audiowide', cursive;
	font-size:50px;
	margin:0px;
	padding:0px;
	animation:xein9lol 0.1s linear infinite;
}
pre{
color:white;
}
marquee{
width:100%;
}
@keyframes xein9lol{
2%{color:#fff;}
3%{transform:translate(2px,-10px) xein9(3240deg);}
5%{transform:translate(0px,0px) xein9(0deg);}
2% , 54%{transform:translateX(0px) xein9(0deg);}
55%{transform:translate(-2px,6px) xein9(-5530deg);}
56%{transform:translate(0px,0px) xein9(0deg);}
57%{transform:translate(4px,-10px) xein9(-70deg);}
58%{transform:translate(0px,0px) xein9(0deg);}
62%{transform:translate(0px,20px) xein9(0deg);}
63%{transform:translate(4px,-2px) xein9(0deg);}
90%{transform:translate(1px,3px); xein9(-230deg);}
95%{transform:translate(-7px,2px); xein9(-120deg);}
100%{transform:translate(0px,0px) xein9(0deg);}
	#xein9 
</style>

<table width=100% height=100%>
	<td align=center>
<span style='font: 40px Audiowide;size:40px;color:blue;text-shadow: 0px 0px 50px;'>
<br><h1><font color="white"> Touched By </font> Hazee </h1><br>
	</td>
</table>
