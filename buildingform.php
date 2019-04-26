<?php
require_once 'buildings.php';
require_once 'bprocess.php';

?>


<form action="bprocess.php" method="POST">
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
</form>