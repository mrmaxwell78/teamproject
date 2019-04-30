<!DOCTYPE html>
<html>
<head>
	<title>Team Project One</title>
	<link href="https://fonts.googleapis.com/css?family=Cardo:400,700|Oswald" rel="stylesheet">
	<link href="stylesheet/formCSS.css" rel="stylesheet">
<style>
body {
  background-image: url("img/blackbackground.png");
}
</style>
</head>
<body>
<?php
require_once 'computers.php';
include('InventoryConnection.php');
?>
<div id="form"></div>
<form action="cprocess.php" method="POST">
<fieldset>
<legend> 
Computer form
</legend>
<label for="VendorID">Vendor</label>
<input type="text" name="VendorID" id="VendorID" value="<?php echo $vendor ?>" required><br>
<label for="Model">Model</label>
<input type="text" name="Model" id="Model" value="<?php echo $model ?>" required><br>
<label for="MemorySize">Memory Size</label>
<input type="text" name="MemorySize" id="MemorySize" value="<?php echo $memory ?>" required><br>
<label for="StorageSize">Storage Size</label>
<input type="text" name="StorageSize" id="StorageSize" value="<?php echo $storage ?>" required><br>
<?php
    if($update == true){
       echo '<button type="submit" name="update">Update</button>';
    } else {
        echo '<button type="submit" value="insert">Insert</button>';
    }
?>
</fieldset>
</form>
<div id="footer"></div>
<footer>
			<em>
			<img src="img/group-icon2.png" alt="group icon" height="3%" width="3%">
			<br>Darly Dubreus, Grace Hechavarria, Mathew Maxwell, 
			<br>Manuel Pena, Gregory Toussaint
			<br>copyright &copy; 2019
			</em>
		</footer>
</body>