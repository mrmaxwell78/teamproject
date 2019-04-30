<?php
include('InventoryConnection.php');

$id = 0;
$vendor = "";
$model = "";
$memory="";
$storage = "";

$update = false;

if(isset($_POST['insert'])){
    $vendor = $_POST['VendorID'];
    $model = $_POST['Model'];
    $memory = $_POST['MemorySize'];
    $storage = $_POST['StorageSize'];

    $sql = "INSERT INTO Computers (VendorID, Model, MemorySize, StorageSize) VALUES ('$vendor', '$model', '$memory', '$storage'";
    $conn->query($sql);
    header('Location: computers.php');
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql = "DELETE FROM Computers WHERE VendorID=$id";
    $conn->query($sql);
    header('Location: computers.php');
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $select = "SELECT FROM Computers WHERE VendorID = $id";
    $update = true;
    $result = $conn->query($select);
    if(count($result)==1){
        $row = $result->fetch_array();
        $vendor = $row['VendorID'];
        $model = $row['Model'];
        $memory = $row['MemorySize'];
        $storage = $row['StorageSize'];
        
     header('Location: rooms.php');
    
    }
}

if(isset($_POST['update'])){
    $vendor = $_POST['VendorID'];
    $model = $_POST['Model'];
    $memory = $_POST['MemorySize'];
    $storage = $_POST['StorageSize'];

    $sql = "UPDATE Computers SET VendorID='$vendor', Model='$model', MemorySize='$memory', StorageSize='$storage' WHERE ComputerID ='$id'";
    $conn->query($sql);
    header('Location: rooms.php');
}

?>
