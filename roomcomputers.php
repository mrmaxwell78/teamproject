<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
  include('InventoryConnection.php'); //DB connection
  $sql = "SELECT * FROM roomcomoputers;"
 ?>
  <table style="width:100%; text-align:left;">
  <tr>
    <th>Count</th>
    <th>Room ID</th>
    <th>Building ID</th>
    <th>Computer ID</th>
  <tr>
<?php
try{
  $rows = $conn->query($sql);
  foreach($rows as $row){
    echo "<tr><td>" . $row["Count"]."</td><td>" . "</td><td>" . $row["RoomID"] . "</td><td>" . $row["BuildingID"] . "</td><td>" . $row["ComputerID"]. "</td><td><input type='submit' value='Update'><input type='submit' value='Delete'></td><tr>";
  }
}catch(PDOException $e){
    echo "<br>Query Failed:" . $e->getMessage();
}
echo "</table>";
$conn = null;
</body>
</html>
