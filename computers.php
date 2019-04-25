<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Computers Table</h1>
<?php
include('InventoryConnection.php');
$sql = "SELECT * FROM computers";
?>
<table style="width: 100%; text-align: left;">
<tr>
	<th>Computer ID</th>
	<th>Vendor ID</th>
	<th>Memory Size</th>
	<th>Storage Size</th>
	<th style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;Action<input type='submit' value='Add Computer' style="float: right;"></th>
</tr>
<?php
try {
  $rows = $conn->query( $sql );
  foreach ( $rows as $row ) {
    echo "<tr><td>" . $row["computerID"]. "</td><td>" . $row["vendorID"] . "</td><td>" . $row["MemorySize"] . "</td><td>" . $row["StorageSize"] . "</td><td><input type='submit' value='Update'> <input type='submit' value='Delete'></td></tr>";
  }
}catch(PDOException $e){
    echo "<br>Query Failed:" . $e->getMessage();
}
echo "</ul>";
$conn = null;
?>
</table>
</body>
</html>

