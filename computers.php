<?
include('InventoryConnection.php');
require_once 'functions.php';
require_once 'cprocess.php';

displayHeader();
$sql = 'SELECT * FROM Computers';
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
		<a href="index.php">HOME</a><a href="buildings.php">BUILDINGS</a><a href="rooms.php">ROOMS</a><a href="roomcomputers.php">ROOM COMPUTERS</a><a href="computers.php" id="selectedpage">COMPUTERS</a><a href="vendors.php">VENDORS</a><a href="report.php">REPORTS</a>
		</nav>
		</div>
		<header><h1>Rooms Table</h1></header>
		<main>
<div id="mainContent">

<div class="tableOverflow">
    <table style="width:100%; text-align:left;">
  <tr>
    <th>Vendor</th>
    <th>Model</th>
    <th>Memory Size</th>
    <th>Storage Size</th>
    <th>Action<input type="submit" value="submit" onclick=document.location.href='computersform.php'></th>
  <tr>
<?php
try{
  $rows = $conn->query($sql);
  foreach($rows as $row){
    echo "<tr><td>" . $row["VendorID"]."</td><td>" . "</td><td>" . $row["Model"] . "</td><td>" . $row["MemorySize"] . "</td><td>" . $row["StorageSize"]. "</td><td><input type='submit' value='Update' onclick=document.location.href='computersform.php><input type='submit' value='Delete' onclick=document.location.href='computersform.php></td><tr>";
  }
}catch(PDOException $e){
    echo "<br>Query Failed:" . $e->getMessage();
}
echo "</table>";
displayPageFooter();
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
