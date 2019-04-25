<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Buildings Table</h1>
<?php
include('InventoryConnection.php');
$sql = "SELECT * FROM buildings";
?>
<table style="width: 100%; text-align: left;">
<tr>
	<th>building ID</th>
	<th>building Number</th>
	<th>building name</th>
	<th style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;Action<input type='submit' value='Add Computer' style="float: right;"></th>
</tr>
<?php
try {
  $rows = $conn->query( $sql );
  foreach ( $rows as $row ) {
    echo "<tr><td>" . $row["BuildingID"]. "</td><td>" . $row["BuildingNo"] . "</td><td>" . $row["BuildingName"] ."</td><td><input type='submit' value='Update'> <input type='submit' value='Delete'></td></tr>";
  }
}catch(PDOException $e){
    echo "<br>Query Failed:" . $e->getMessage();
}
echo "</ul>";
$conn = null;
?>
</body>
</html>
