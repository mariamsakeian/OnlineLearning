<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>PROֆֆ</title>
    
  <style>
    body {
      background-image: url('img/bkg1.jpg');
      background-size: cover;
    }
  </style>
  </head>
<style type="text/css">
*{
	margin: 0;
	padding: 0;
}
body{
	background: #eee;
	font-size: 16px;
	font-family: sans-serif,arial;
}
 
.nav{
	width: 1100px;
	height: 60px;
	margin: 0 auto;
	border-radius: 5px;
	
}
ul li{
	list-style: none;
	width: 220px;
	line-height: 55px;
	position: relative;
	background: #222;
	box-shadow: 0px 2px 5px 0px grey;
	text-align: center;
	float: left;
	background-color: #010000;
}
ul li ul{
	position: absolute;
}
.nav > ul > li:nth-of-type(1){
	border-radius: 5px 0px 0px 5px;
}
.nav > ul > li:nth-of-type(5){
	border-radius: 0px 5px 5px 0px;
}
ul li a{
	color: #fff;
	width: 200px;
	height: 58px;
	display: inline-block;
	text-decoration: none;
}
ul li a:hover{
	font-weight: bold;
	border-bottom: 2px solid #fff;
}
ul li ul{
	display: none;
}
.nav ul li:hover ul{
	display: block;
}
.fa{
	margin-right: 5px;
}
.container{
	width: 1000px;
	height: 200px;
	margin: 0 auto;
	padding:20px 20px;
}
@media screen and (min-width: 480px) and (max-width: 480px){
	header{
		width: 100%;
	}
	.nav{
		display: none;
		width: 100%;
		height: auto;
	}
	ul li{
		width: 100%;
		float: none;
	}
	ul li a{
		width: 100%;
		display: block;
	}
	ul li ul{
		position: static;
	}
	ul li ul li a{
		background: #222;
	}
	.fa-list.modify{
		display: block;
	}
	.container{
		width: 100%;
		height: auto;
	}
	body{
		overflow-x:hidden;
	}
}

</style>

<body>
<header class="header">
<a class="logo">
<h1 style="color:green;">ՈՒսուցիչ</h1>

</a>
	<div class="menu"></div>
 
<nav class="nav">
	<ul>
		<li><a href="C:\Users\User\Desktop\JavaS\end\html">Գլխավոր մենյու</a>
		
		
		<li><a href="">Մեր մասին</a>
		</li>
	
		<li><a href="../ C:\xampp\htdocs\mes">Մուտք գոծրել</a>
		
		</li>
		<li><a href="../ C:\xampp\htdocs\mes">Գրանցվել</a>
	</ul>
</nav>
<footer>

</footer>
 </body>
</html>