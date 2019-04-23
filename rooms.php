<?php
require_once 'config.php';
require_once 'functions.php';
require_once 'rprocess.php';

displayHeader();

try{
    $conn = new PDO($DB, $DBUSER, $DBPASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {}
?>
<nav>
    <a href="index.php">Home</a>
</nav>

<?php
        $edit = '<a href="movies.php?edit=$row["id"]">Edit</a>';
        $delete = '<a href="movies.php?delete=$row["id"]">Delete</a>';
        $result = $conn->query("SELECT * FROM Room");
        while($row = $result->fetch_assoc()){
            echo $row['BuildingID'], $edit, $delete;
            echo $row['RoomNumber'], $edit, $delete;
            echo $row['Capacity'], $edit, $delete;
        }
    ?>

<form action="" method="POST">
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

<?php
displayPageFooter();
?>
