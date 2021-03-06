<?php
require_once 'functions.php';
require_once 'rprocess.php';
include('InventoryConnection.php'); //DB connection
$sql = "SELECT * FROM Rooms";

displayHeader();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Team Project One</title>
	<link href="https://fonts.googleapis.com/css?family=Cardo:400,700|Oswald" rel="stylesheet">
	<link href="tableCSS.css" rel="stylesheet">
</head>
<body>
<div id="navbar">
		<nav>
		<a href="index.php">HOME</a><a href="buildings.php">BUILDINGS</a><a href="rooms.php" id="selectedpage">ROOMS</a><a href="roomcomputers.php">ROOM COMPUTERS</a><a href="computers.php">COMPUTERS</a><a href="vendors.php">VENDORS</a>
		</nav>
		</div>
		<header><h1>Rooms Table</h1></header>
		<main>

<div id="mainContent">
    <input type="submit" value="submit" onclick=document.location.href='roomsform.php'>

<div class="tableOverflow">
<table style="width: 100%; text-align: left;">
<tr>
	<th>Room</th>
	<th>Building</th>
	<th>Room Number</th>
	<th>Capacity</th>
	<th style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;Action<input type='submit' value='Add Time' style="float: right;"></th>
</tr>
<?php
try {
  $rows = $conn->query( $sql );
  foreach ( $rows as $row ) {
    echo "<tr><td>" . $row["RoomID"]. "</td><td>" . $row["BuildingID"]. "</td><td>" . $row["Room Number"] . "</td><td>" . $row["Capacity"] . "</td><td><input type='submit' value='Update' onclick=document.location.href='roomsform.php'>> <input type='submit' value='Delete' onclick=document.location.href='roomsform.php'>></td></tr>";
  }
}catch(PDOException $e){
    echo "<br>Query Failed:" . $e->getMessage();
}
echo "</ul>";
$conn = null;
?>
</table>
</div>
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
<?php
displayPageFooter();
?>
