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
require_once 'buildings.php';
require_once 'bprocess.php';
?>
<div id="form"></div>
<form action="bprocess.php" method="POST">
<fieldset>
<legend> 
Building form
</legend>
<label for="BuildingNo">Building Number</label>
<input type="text" name="BuildingNo" id="BuildingNo" value="<?php echo $buildnumber ?>" required><br>
<label for="BuildingName">Room Number</label>
<input type="text" name="BuildingName" id="BuildingName" value="<?php echo $buildingname ?>" required><br>

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
</html>
