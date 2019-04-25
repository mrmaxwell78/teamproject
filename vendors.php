<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Vendors Table</h1>
<?php
include('InventoryConnection.php');
$sql = "SELECT * FROM vendors";
?>
<table style="width: 100%; text-align: left;">
<tr>
	<th>Vendor ID</th>
	<th>Name</th>
	<th>Phone</th>
	<th style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;Action<input type='submit' value='Add Vendor' style="float: right;"></th>
</tr>
<?php
try {
  $rows = $conn->query( $sql );
  foreach ( $rows as $row ) {
    echo "<tr><td>" . $row["vendorID"]. "</td><td>" . $row["name"] . "</td><td>" . $row["phone"] . "</td><td><input type='submit' value='Update'> <input type='submit' value='Delete'></td></tr>";
  }
}catch(PDOException $e){
    echo "<br>Query Failed:" . $e->getMessage();
}
echo "</ul>";
$conn = null;
?>
	<a href="index.php">BACK TO INDEX</a>
</body>
</html>
