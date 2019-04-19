<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
include('InventoryConnection.php'); //DB connection
$sql = "SELECT * FROM time";
?>
<table style="width: 100%; text-align: left;">
<tr>
	<th>Room IDr</th>
	<th>Building ID</th>
	<th>RoomNumber</th>
	<th>Capacity</th>
	<th>Action<input type='submit' value='Add Time'></th>
</tr>
<?php
try {
  $rows = $conn->query( $sql );
  foreach ( $rows as $row ) {
    echo "<tr><td>" . $row["RoomID"]. "</td><td>" . $row["BuildingID"] . "</td><td>" . $row["RoomNumber"] . "</td><td>" . $row["Capacity"]. "</td><td><input type='submit' value='Update'><input type='submit' value='Delete'></td><tr>";
  }
}catch(PDOException $e){
    echo "<br>Query Failed:" . $e->getMessage();
}
echo "</table>";
$conn = null;
?>
</body>
</html>
