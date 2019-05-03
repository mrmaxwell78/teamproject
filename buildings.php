<?php
require_once 'functions.php';
require_once 'rprocess.php';
include('InventoryConnection.php'); //DB connection
$sql = "SELECT * FROM Buildings";
$edit = '<a href="buildingsform.php?edit=$row["id"]">Edit</a>';
$delete = '<a href="buildingsform.php?delete=$row["id"]">Delete</a>'

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
		<a href="index.php">HOME</a><a href="buildings.php" id="selectedpage">BUILDINGS</a><a href="rooms.php">ROOMS</a><a href="roomcomputers.php">ROOM COMPUTERS</a><a href="computers.php">COMPUTERS</a><a href="vendors.php">VENDORS</a><a href="report.php">REPORTS</a>
		</nav>
		</div>
		<header><h1>Buildings Table</h1></header>
		<main>
		
<div id="mainContent">
		
    <input type="submit" value="submit" onclick=document.location.href='buildingform.php'>

<div class="tableOverflow">
<table style="width: 100%; text-align: left;">
<tr>
	<th>Building ID</th>
	<th>Building Number</th>
	<th>Building Name</th>
	<th style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;Action<input type='submit' value='Add Building' style="float: right;"></th>
</tr>
<?php
try {
  $rows = $conn->query( $sql );
  foreach ( $rows as $row ) {
    echo "<tr><td>" . $row["BuildingID"]. "</td><td>" . $row["BuildingNo"]. "</td><td>" . $row["BuildingName"] . "</td><td>" ."<td><tr>$edit, $delete</td></tr>";
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
