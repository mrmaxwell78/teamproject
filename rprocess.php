<?php
include('InventoryConnection.php');
$id=0;
$build = "";
$roomNumber="";
$capacity = 0;
$update = false;

if(isset($_POST['submit'])){
    $build = $_POST['BuildingID'];
    $roomNumber = $_POST['RoomNumber'];
    $capacity = $_POST['Capacity'];

    $sql = "INSERT INTO Rooms (BuildingID, Capacity) VALUES ('$build', '$roomNumber', $capacity";
    $conn->query($sql);
    header('Location: rooms.php');
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "DELETE FROM Rooms WHERE RoomID=$id";
    $conn->query($sql);
    header('Location: rooms.php');
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $select = "SELECT FROM Rooms WHERE RoomID = $id";
    $result = $conn->query($select);
    if(count($result)==1){
        $row = $result->fetch_array();
        $build = $row['BuildingID'];
        $roomNumber = $row['RoomNumber'];
        $capacity = $row['Capacity'];
        
     header('Location: rooms.php');
    
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $build = $_POST['BuildingID'];
    $roomNumber = $_POST['RoomNumber'];
    $capacity = $_POST['Capacity'];

    $sql = "UPDATE Rooms SET BuildingID='$build', RoomNumber='$roomNumber', Capacity='$capacity' WHERE RoomID ='$id'";
    $conn->query($sql);
    header('Location: rooms.php');
}
$conn = null;
?>
