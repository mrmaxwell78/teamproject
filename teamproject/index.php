<!DOCTYPE html>
<html>
<head>
	<title>Team Project One</title>
	<link href="https://fonts.googleapis.com/css?family=Cardo:400,700|Oswald" rel="stylesheet">
	<style>
		body {
		font-family: Verdana, Geneva, sans-serif;
		margin: auto;
		background-image: url(img/blackbackground.png);
		}
		#navbar{padding-bottom: 1.5%;}
		nav{
			font-size: 1em;
			text-shadow: 2px 2px 3px rgba(0, 0, 0);
			background-image: url(img/blackbackground.png);
			padding: 1.5% 1.5% 1.5% 0%;
			color: white;
			position: fixed;
			width: 100%;
		}
		nav a {
			padding: 1.5% 1.5% 1.5% 1.5%;
			color: white;
		}
		nav a:hover, #selectedpage{
			background-color: rgba(108, 210, 247,0.4);
			padding: 1.5% 1.5% 1.5% 1.5%;
			color: white;
		}
		.navspace{padding: 1.5% 3% 1.5% 3%;}
		main{
			padding: 2% 0% 2% 0%;
			background-color: rgba(108, 210, 247,0.4);
		}
		#mainContent{
			/*background-image: url(img/graybanner.png);*/
			padding: 3% 3% 6% 12%;
		}
		header{
			background-image: url(img/headerimg.png);
			text-align: center;
			color: #fff;
			padding-top: 180px;
			padding-bottom: 145px;
			box-shadow: inset  0  9px 10px -10px #1e1d1d, 
						inset  0 -9px 10px -10px #1e1d1d;
		}
		h1{
			background-color: rgba(0, 0, 0,0.7);
			border-top: 2px solid #fff;
			border-bottom: 2px solid #fff;
			padding: 2%;
			font-size: 2.5em;
			font-family: 'Oswald', sans-serif;
			text-shadow: 0px 1px 3px #000;
			letter-spacing: 3.5px;
		}
		h2{
			font-family: 'Oswald', sans-serif;
			text-transform: uppercase;
		}
		footer {
			color: #fff;
			text-align: center;
			width: 100%;
			margin: auto;
			padding: 3% 0% 3% 0%;
			font-size: 12px;
			background-image: url(img/blackbackground.png);
		}
		a {
			text-decoration: none;
		}
		/*link*/
		a:link {
			color: white;
		}
		/* visited link */
		a:visited {
			color: white;
		}
		/* mouse over link */
		a:hover {
			color: #2F9484;
		}
		/* selected link */
		a:active {
			color: #2F9484;
		}
		a.select:link, a.select:visited{
			color: white;
			font-size: 1.5em;
			font-family: 'Oswald', sans-serif;
			letter-spacing: 2px;
		}
		a.select:active, a.select:hover{
			color: #1C2B32;
			font-size: 1.5em;
		}
	</style>
</head>

<body>
		<div id="navbar">
		<nav>
			<a href="index.php">HOME</a>
			<a href="buildings.php">BUILDINGS</a>
			<a href="rooms.php">ROOMS</a>
			<a href="roomcomputers.php">ROOM COMPUTERS</a>
			<a href="computers.php">COMPUTERS</a>
			<a href="vendors.php">VENDORS</a>
			<a href="reports.php">REPORTS</a>
		</nav>
		</div>
		<header><h1>INVENTORY DATABASE</h1></header>
		<main>
			<img src="img/bluearrow.png" style="float: right; position: absolute; right: 0px; center: 0px; z-index: 0; padding-right: 0%;" width="75%" height="55%">
			<div id="mainContent">
			<h2>Please pick a table name</h2>
				<ul>
					<li><a href="lab5_theater.php" class="select">Theater</a></li>
					<li><a href="lab5_screen.php" class="select">Screen</a></li>
					<li><a href="lab5_movie.php" class="select">Movie</a></li>
					<li><a href="lab5_time.php" class="select">Time</a></li>
				</ul>
			</div>
		</main>
		<footer>
			<em>
			<img src="img/group-icon2.png" alt="group icon" height="3%" width="3%">
			<br>Darly Dubreus, Grace Hechavarria, Mathew Maxwell, 
			<br>Manuel Pena, Gregory Toussaint
			<br>copyright &copy; 2019
			</em>
		</footer>
</body>
</html>
