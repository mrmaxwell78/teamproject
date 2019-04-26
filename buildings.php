<?php
require_once 'functions.php';
require_once 'rprocess.php';
include('InventoryConnection.php'); //DB connection
$sql = "SELECT * FROM Buildings";

displayHeader();

?>
<nav>
    <a href="index.php">Home</a>
</nav>
    <input type="submit" value="submit" onclick=document.location.href='buildingform.php'>
    table style="width: 100%; text-align: left;">
<tr>
	<th>Building ID</th>
	<th>Building Number</th>
	<th>Building Name</th>
	<th style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;Action<input type='submit' value='Add Time' style="float: right;"></th>
</tr>
<?php
try {
  $rows = $conn->query( $sql );
  foreach ( $rows as $row ) {
    echo "<tr><td>" . $row["BuildingID"]. "</td><td>" . $row["BuildingNo"]. "</td><td>" . $row["BuildingName"] . "</td><td>" . "<input type='submit' value='Update' onclick=document.location.href='roomsform.php'>> <input type='submit' value='Delete' onclick=document.location.href='roomsform.php'>></td></tr>";
  }
}catch(PDOException $e){
    echo "<br>Query Failed:" . $e->getMessage();
}
echo "</ul>";
$conn = null;
?>
</table>
<?php
displayPageFooter();
?>
