<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
include('InventoryConnection.php');
$sql = "SELECT * FROM time";
?>
<table style="width: 100%; text-align: left;">
<tr>
	<th>Inventory ID</th>
	<th>Name</th>
	<th>Phone</th>
	<th>Action<input type='submit' value='Add Time'></th>
</tr>
<?php
try {
  $rows = $conn->query( $sql );
  foreach ( $rows as $row ) {
    echo "<tr><td>" . $row["VendorID"]. "</td><td>" . $row["Name"] . "</td><td>" . $row["Phone"] . "</td><td><input type='submit' value='Update'><input type='submit' value='Delete'></td><tr>";
  }
}catch(PDOException $e){
    echo "<br>Query Failed:" . $e->getMessage();
}
echo "</table>";
$conn = null;
?>
</body>
</html>
