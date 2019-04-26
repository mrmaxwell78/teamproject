<?php
require_once 'rooms.php';
require_once 'rprocess.php';

?>


<form action="rprocess.php" method="POST">
<label for="BuildingID">Building</label>
<input type="text" name="BuildingID" id="BuildingID" value="<?php echo $build ?>" required><br>
<label for="RoomNumber">Room Number</label>
<input type="text" name="RoomNumber" id="RoomNumber" value="<?php echo $roomNumner ?>" required><br>
<label for="Capacity">Capacity</label>
<input type="text" name="Capacity" id="Capacity" value="<?php echo $capacity ?>" required><br>
<?php
    if($update == true){
       echo '<button type="submit" name="update">Update</button>';
    } else {
        echo '<button type="submit" value="insert">Insert</button>';
    }
?>
</form>