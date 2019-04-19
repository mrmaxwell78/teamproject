<?php
require_once 'config.php';
require_once 'functions.php';
displayHeader();
try{
    $conn = new PDO($DB, $DBUSER, $DBPASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
    echo "Connection failed!";
}

function create(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $buildingID = $_POST['BuildingID'];
        $RoomNumber = $_POST['RoomNumber'];
        $Capacity = $_POST['Capacity'];

        $sql = "INSERT INTO Rooms (BuildingID, RoomNumber, Capacity) 
        VALUES ('".$buildingID."', '".$RoomNumber."', '".$Capacity."' )";
        if($conn->query($sql)){
            echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
        }
    }
}

function update(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $buildingID = $_POST['BuildingID'];
        $RoomNumber = $_POST['RoomNumber'];
        $Capacity = $_POST['Capacity'];

        $sql = "UPDATE Rooms SET RoomNumber = $RoomNumber Capacity = $Capacity WHERE RoomNumber = $RoomNumber";

        if($conn->query($sql)){
            echo "<script type= 'text/javascript'>alert('Record Updated Successfully');</script>";
        }
}

function del(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $RoomNumber = $_POST['RoomNumber'];
        
        $sql = "DELETE FROM Rooms WHERE 'RoomNumber' = $RoomNumber";

        if($conn->query($sql)){
            echo "<script type='text/javascript'>alert('Record Deleted Successfully');</script>";
        }
    }
}

?>

<form action="" method="POST">
<label for="BuildingID">Building</label>
<input type="text" name="BuildingID" id="BuildingID" required><br>
<label for="RoomNumber">Room Number</label>
<input type="text" name="RoomNumber" id="RoomNumber" required><br>
<label for="Capacity">Capacity</label>
<input type="text" name="Capacity" id="Capacity" required><br>
<button onclick="<?php create() ?>" value="Create">
<button onclick="<?php update() ?>" value="Update">
<button onclick="<?php del() ?>" value="Delete">
</form>

<?php
displayPageFooter();
?>