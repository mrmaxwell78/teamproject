<?
include('InventoryConnection.php');
require_once 'functions.php';
require_once 'cprocess.php';

displayHeader();
$sql = 'SELECT * FROM Computers';
?>

<nav>
    <a href="index.php">Home</a>
</nav>
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