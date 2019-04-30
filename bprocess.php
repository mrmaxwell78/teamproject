<?php
include('InventoryConnection.php');
$id=0;
$buildnumber = "";
$buildingname = "";
$update = false;

if(isset($_POST['submit'])){
    $buildnumber = $_POST['BuildingNo'];
    $buildingname = $_POST['BuildingName'];

    $sql = "INSERT INTO Buildings (BuildingNo, BuildingName) VALUES ('$buildnumber', '$buildingname'";
    $conn->query($sql);
    header('Location: buildings.php');
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "DELETE FROM Buildings WHERE BuildingID=$id";
    $conn->query($sql);
    header('Location: buildings.php');
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $select = "SELECT FROM Buildings WHERE BuildingID = $id";
    $result = $conn->query($select);
    $update = true;
    if(count($result)==1){
        $row = $result->fetch_array();
        $buildnumber = $row['BuildingNo'];
        $buildingname = $row['BuildingName'];
  
        
     header('Location: buildings.php');
    
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $buildnumber = $_POST['BuildingNo'];
    $buildingname = $_POST['BuildingName'];

    $sql = "UPDATE Buildings SET BuildingNo='$buildnumber', BuildingName='$buildingname' WHERE BuildingID ='$id'";
    $conn->query($sql);
    header('Location: buildings.php');
}
$conn = null;
?>
