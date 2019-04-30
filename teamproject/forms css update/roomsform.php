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
require_once 'rooms.php';
require_once 'rprocess.php';

?>

<div id="form"></div>
<form action="rprocess.php" method="POST">
<fieldset>
<legend> 
Rooms form
</legend>
<label for="BuildingID">Building</label>
<input type="text" name="BuildingID" id="BuildingID" value="<?php echo $build ?>" required><br><br>
<label for="RoomNumber">Room Number</label>
<input type="text" name="RoomNumber" id="RoomNumber" value="<?php echo $roomNumner ?>" required><br><br>
<label for="Capacity">Capacity</label>
<input type="text" name="Capacity" id="Capacity" value="<?php echo $capacity ?>" required><br><br>
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