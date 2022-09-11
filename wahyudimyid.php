
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8"><link href="https://moskhar.my.id/portfolio/pp.webp" rel="icon" type="image/x-icon">
    <title>Wahyudi Official</title>
    <meta name="description" content="
        Author: Wahyuudi,
        Category: Web Portfolio,
        Date: September 2022,
        Purpose: Training;
    ">
    <meta property="og:image" content="https://moskhar.my.id/portfolio/pp.webp">
</head>
<style type="text/css">

#back{
	background: #040d21;
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	overflow: hidden;
}
#saturn, #isiSaturn{
	top: 140px;
	height: 200px;
	width: 200px;
	position: absolute;
	left: 0;
	right: 650px;
	margin: auto;
	background:  #040d21;
	border-radius: 50%;
	z-index: 2;
}
#isiSaturn{
	background: linear-gradient(20deg, transparent 55%, #040d21 45%);
	z-index: 4;
}
#asteroid{
	top: 80px;
	left: 0;
	right: 650px;
	margin: auto;
	animation: animasi 12s linear infinite;
	width:300px;
	border: 3px solid white;
	border-right: 3px solid transparent;
	height: 300px;
	z-index: 3;
}
#asteroid, #asteroid div {
	position: absolute;
	background-color: transparent;
	transform-style: preserve-3d;
	border-radius:50%;
}
/*
	"border: 3px solid white; border-bottom: 3px solid transparent; border-right: 3px solid transparent; border-left: 3px solid transparent;",
	"border: 3px solid white; border-top: 3px solid transparent; border-right: 3px solid transparent; border-left: 3px solid transparent;",
	"border: 3px solid white; border-top: 3px solid transparent; border-bottom: 3px solid transparent; border-left: 3px solid transparent;",


	"border: 3px solid white; border-top: 3px solid transparent; border-bottom: 3px solid transparent;",
	"border: 3px solid white; border-right: 3px solid transparent; border-left: 3px solid transparent;",
	"border: 3px solid white; border-top: 3px solid transparent; border-left: 3px solid transparent;",
*/

	#ast1{
				border: 3px solid white; border-top: 3px solid transparent;		opacity: 0.5;
		left: -7px;
		top: -7px;

		width: 314px;
		height: 314px;
		animation: ast 24s linear infinite;
	}
	#ast2{
				border: 3px solid white; border-left: 3px solid transparent;		opacity: 0.6;
		left: -14px;
		top: -14px;

		width: 328px;
		height: 328px;
		animation: ast 8s linear infinite;
	}
	#ast3{
				border: 3px solid white; border-left: 3px solid transparent;		opacity: 0.7;
		left: -21px;
		top: -21px;

		width: 342px;
		height: 342px;
		animation: ast 10s linear infinite;
	}
	#ast4{
				border: 3px solid white; border-top: 3px solid transparent;		opacity: 0.8;
		left: -28px;
		top: -28px;

		width: 356px;
		height: 356px;
		animation: ast 11s linear infinite;
	}
	#ast5{
				border: 3px solid white; border-bottom: 3px solid transparent; border-right: 3px solid transparent;		opacity: 0.6;
		left: -35px;
		top: -35px;

		width: 370px;
		height: 370px;
		animation: ast 15s linear infinite;
	}
	#ast6{
				border: 3px solid white; border-bottom: 3px solid transparent; border-right: 3px solid transparent;		opacity: 0.8;
		left: -42px;
		top: -42px;

		width: 384px;
		height: 384px;
		animation: ast 8s linear infinite;
	}
	#ast7{
				border: 3px solid white; border-left: 3px solid transparent;		opacity: 0.8;
		left: -63px;
		top: -63px;

		width: 426px;
		height: 426px;
		animation: ast 12s linear infinite;
	}
	#ast8{
				border: 3px solid white; border-top: 3px solid transparent;		opacity: 0.5;
		left: -72px;
		top: -72px;

		width: 444px;
		height: 444px;
		animation: ast 19s linear infinite;
	}
	#ast9{
				border: 3px solid white; border-bottom: 3px solid transparent; border-right: 3px solid transparent;		opacity: 0.5;
		left: -81px;
		top: -81px;

		width: 462px;
		height: 462px;
		animation: ast 16s linear infinite;
	}
	#ast10{
				border: 3px solid white; border-left: 3px solid transparent;		opacity: 0.8;
		left: -90px;
		top: -90px;

		width: 480px;
		height: 480px;
		animation: ast 16s linear infinite;
	}


@KeyFrames animasi{
	0%{
	    transform: rotateX(-75deg) rotateY(-20deg) rotateZ(0deg);
	}
	100%{
	    transform: rotateX(-75deg) rotateY(-20deg) rotateZ(360deg);
	}
}
@KeyFrames ast{
	0%{
	    transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg);
	}
	100%{
	    transform: rotateX(0deg) rotateY(0deg) rotateZ(360deg);
	}
}

#light{
	transform: perspective(8px) rotateX(1deg) rotateZ(-30deg);
	background: linear-gradient(to bottom, rgb(255,255,255,0.6), rgb(255,255,255,0.4), rgb(255,255,255,0.2), rgb(255,255,255,0.1), transparent);
	position: absolute;
	width: 500px;
	height: 600px;
	left: -120px;
	top: -180px;
	opacity: 0.9;
	z-index: 1;
}
.tombol{
	color: #040d21;
	font-size: 18px;
	right: 250px;
	position: absolute;
	width: 240px;
	height: 60px;
	border: none;
	border-radius: 3px;
	z-index: 6;
	animation: tombol 15s infinite;
	background: white;
	box-shadow: 1px 1px 0 rgb(200, 200, 200),
		2px 2px 0 rgb(200, 200, 200),
		3px 3px 0 rgb(200, 200, 200),
		4px 4px 0 rgb(200, 200, 200),
		5px 5px 0 rgb(200, 200, 200),
		6px 6px 0 rgb(200, 200, 200),
		7px 7px 0 rgb(200, 200, 200),
		8px 8px 0 rgb(200, 200, 200),
		9px 9px 0 rgb(200, 200, 200),
		10px 10px 0 rgb(200, 200, 200);
}
.tombol:hover{
	background: deepskyblue;
	box-shadow: 1px 1px 0 #0098ca,
		2px 2px 0 #0098ca,
		3px 3px 0 #0098ca,
		4px 4px 0 #0098ca,
		5px 5px 0 #0098ca,
		6px 6px 0 #0098ca,
		7px 7px 0 #0098ca,
		8px 8px 0 #0098ca,
		9px 9px 0 #0098ca,
		10px 10px 0 #0098ca;
}
#tombol1{
	top: 100px;
	animation-delay: 300ms;
}
#tombol2{
	top: 190px;
	animation-delay: 900ms;
}
#tombol3{
	top: 280px;
	animation-delay: 600ms;
}
#tombol4{
	top: 370px;
}
#tombol5{
	top: 460px;
	animation-delay: 1200ms;
}
.tombol p{
	font-weight: bold;
	line-height: 18px;
	font-family: arial;
}

@KeyFrames tombol{
	0%{
		transform: translate(0%,0%);
	}
	25%{
		transform: translate(10%,30%);
	}
	50%{
		transform: translate(20%,10%);
	}
	75%{
		transform: translate(0%,30%);
	}
	100%{
		transform: translate(0%,0%);
	}
}
#tempatAst{
	position: relative;
	right: -300px;
	top: 0;
	height: 600px;
	width: 1000px;
	background: transparent;
}

.snowflake {
	color: white;
	position: absolute;
	bottom: 20px;
	animation: fall linear forwards;
	right: 0px;
}

@keyframes fall {
	to {
		transform: translateX(-210vh);
	}
}
@media (max-width: 1250px){
	.tombol{
		font-size: 15px;
		width: 200px;
		height: 55px;
		right: 30px;
		left: 0;
		margin: auto;
		opacity: 0.9;
	}
	#asteroid{
		left: -80px;
	}
	#light{
		top: -230px;
		left: -500px;
	}
	#tempatAst{
		right: 500px;
	}

	#tombol1{
		top: 70px;
	}
	#tombol2{
		top: 150px;
	}
	#tombol3{
		top: 230px;
	}
	#tombol4{
		top: 310px;
	}
	#tombol5{
		top: 390px;
	}
	#saturn, #isiSaturn{
		top: 160px;
		height: 180px;
		width: 180px;
	}
}
</style>
<body>
	<div id="back">
	    <div id="loader" style="position: fixed;height: 100%;width: 100%;left: 0;top: 0;background: #0090e7;z-index: 111;">
	        <style type="text/css">
	            #loader #pendd1{
	                display: block;
	                position: absolute;
	                top: 20%;
	                left: 0;
	                right: 0;
	                margin: auto;
	                height: 100px;
	                width: 100px;
	                background: transparent;
	                border-radius: 50%;
	                animation: loader 3s infinite;
	                border: 5px solid #0090e7;
	                border-top: 5px solid white;
	                border-bottom: 5px solid white;
	            }
	            @KeyFrames loader{
	                0%{transform: rotate(0deg);}
	                100%{transform: rotate(360deg);}
	            }
	        </style>
	        <div id="pendd1"></div>
	        <p style="color: white; display:block; font-size:24px; font-family: sans-serif; position:absolute; top:45%; left:0; right:0; margin:auto;text-align:center;">Loading</p>
	        <script type="text/javascript">
				window.addEventListener("load", function () {
					    document.getElementById("loader").innerHTML = "";
					    document.getElementById("loader").remove();
					setTimeout(() => {
					    typeWriter(0,txt,speed);
					}, 100);
				});
	        </script>
	    </div>
	    <div id="textLoader">
	    	<p id="typing"></p>
	    	<style type="text/css">
	    		#textLoader{
	    			position: fixed;
	    			left: 0;
	    			top: 0;
	    			height: 100%;
	    			width: 100%;
	    			background: transparent;
	    			z-index: 10;
	    		}
	    		#typing{
	    			font-family: arial;
	    			color: rgb(230, 230, 230);
	    			top: 25%;
	    			font-size: 40px;
	    			font-weight: normal;
	    			text-align: center;
	    			left: 0;
	    			right: 0;
	    			margin: auto;
	    			width: 60%;
	    			position: fixed;
	    			padding: 30px;
	    			background: rgb(4, 13, 33, 0.5);
	    		}
	    		@keyframes opt{
	    			0%{opacity: 1;}
	    			100%{opacity: 0;}
	    		}
	    		@media (max-width: 1250px){
	    			#typing{
	    				height: 20%;
	    				width: 70%;
	    			}
	    		}
	    	</style>
	    	<script type="text/javascript">
				function typeWriter(i, txt, speed) {
				  if (i < txt.length) {
				    document.getElementById("typing").innerHTML += txt.charAt(i);
				    i++;
				    setTimeout(function(){
				        typeWriter(i, txt, speed);
				    }, speed);
				  }else{
					setTimeout(() => {
						document.getElementById("textLoader").style.animation = 'opt 1s forwards';
					}, 1000);
					setTimeout(() => {
						document.getElementById("textLoader").remove();
						pinMulai = 1;
			            pinTujuan = 0;
					}, 2000);
				  }
				}
	    	</script>
	    </div>
		<div id="saturn"></div>
		<div id="isiSaturn"></div>
		<div id="asteroid">
							<div id="ast1">
				</div>
							<div id="ast2">
				</div>
							<div id="ast3">
				</div>
							<div id="ast4">
				</div>
							<div id="ast5">
				</div>
							<div id="ast6">
				</div>
							<div id="ast7">
				</div>
							<div id="ast8">
				</div>
							<div id="ast9">
				</div>
							<div id="ast10">
				</div>
					</div>
		<div id="light"></div>
		<a href="https://wahyudi-id.herokuapp.com" style="text-decoration: none;"><button class="tombol" id="tombol1"><p>Profile</p></button></a>
		<a href="https://bit.ly/OSIS96JKT" style="text-decoration: none;"><button class="tombol" id="tombol2"><p>OSIS 96 Official </p></button></a>
		<a href="https://fbdl.wahyup094.repl.co" style="text-decoration: none;"><button class="tombol" id="tombol3"><p>Fb Downloader</p></button></a>
		<a href="https://2048.wahyup094.repl.co/" style="text-decoration: none;"><button class="tombol" id="tombol4"><p>2048 Game</p></button></a>
		<a href="https://link.bio.wahyup094.repl.co" style="text-decoration: none;"><button class="tombol" id="tombol5"><p>Link.bio</p></button></a>
		<div id="tempatAst"></div>
		<div id="tulisTujuan" style="color: rgb(200, 200, 200); font-family: arial;font-size: 18px;position: absolute;bottom: 55px;left: 30px;">I want to be a <b id="tujuan" style="color:deepskyblue;"></b>|</div>
	</div>
</body>
<script type="text/javascript">

	var speed = 120;
	var txt = 'Welcome To My World ...';
	var pinTujuan = 0;
	var txtTujuan = ["Programmer", "Professional"];
	var pinMulai = 0;
	function createAst() {
		const snow_flake = document.createElement('i');
		snow_flake.classList.add('snowflake');
		var node = document.createTextNode(".");
		snow_flake.appendChild(node);
		snow_flake.style.top = Math.random() * 600 + 'px';
		snow_flake.style.animationDuration = Math.random() * 4 + 8 + 's'; // between 2 - 5 seconds
		snow_flake.style.opacity = Math.random() + 0.2;
		snow_flake.style.fontSize = Math.random() * 30 + 20 + 'px';
		snow_flake.style.fontWeight = 'bold';
		snow_flake.style.fontWeight = 'bold';
		snow_flake.style.bottom = 0;
		if (snow_flake.style.opacity < 0.7) {
			snow_flake.style.zIndex = 1;
		}else {
			snow_flake.style.zIndex = 5;
		}
		document.querySelector("#tempatAst").appendChild(snow_flake);
		
		setTimeout(() => {
			snow_flake.remove();
		}, 20000);

		if (pinTujuan == 0 && pinMulai == 1) {
			writeTujuan(0, txtTujuan[0], 120);
		}else if (pinTujuan == 5 && pinMulai == 1) {
			hapusWrite()
		}else if (pinTujuan == 8 && pinMulai == 1) {
			writeTujuan(0, txtTujuan[1], 120);
		}else if (pinTujuan == 13 && pinMulai == 1) {
			hapusWrite()
			pinTujuan = -3;
		}
		pinTujuan++;
	}

	function hapusWrite() {
	  if (document.getElementById("tujuan").innerHTML.length != 0 ) {
	    document.getElementById("tujuan").innerHTML = document.getElementById("tujuan").innerHTML.substring(0,document.getElementById("tujuan").innerHTML.length-1);
	    setTimeout(function(){
		    hapusWrite();
	    }, 80);
	  }
	}

	function writeTujuan(i, teks, speed) {
	  if (i < teks.length) {
	    document.getElementById("tujuan").innerHTML += teks.charAt(i);
	    i++;
	    setTimeout(function(){
	        writeTujuan(i, teks, speed);
	    }, speed);
	  }
	}
	setInterval(createAst, 700);
// I want to be a  Professional,Programmer
</script>
</html>
