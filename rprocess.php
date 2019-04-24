<?php
require_once 'config.php';
try{
    $conn = new PDO(DB, DBUSER, DBPASSWORD);
} catch(PDOException $e) {}

$id=0;
$build = "";
$roomNumber="";
$capacity = 0;
$update = false;

if(isset($_POST['insert'])){
    $build = $_POST['BuildingID'];
    $roomNumber = $_POST['RoomNumber'];
    $capacity = $_POST['Capacity'];

    $sql = "INSERT INTO Rooms (BuildingID, Capacity) VALUES ('$build', '$roomNumber', $capacity";
    $conn->query($sql);
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "DELETE FROM Rooms WHERE RoomID=$id";
    $conn->query($sql);
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $select = "SELECT FROM Rooms WHERE RoomID = $id";
    $result = $conn->query($select);
    if(count($result)==1){
        $row = $result->fetch_array();
        $title = $row['Title'];
        $type = $row['type'];
    
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $title = $_POST['Title'];
    $type = $_POST['Type'];

    $sql = "UPDATE Rooms SET BuildingID='$build', RoomNumber='$roomNumber', Capacity='$capacity' WHERE RoomID ='$id'";
    $conn->query($sql);
}

?>
