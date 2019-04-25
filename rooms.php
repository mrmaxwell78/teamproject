<?php
require_once 'config.php';
require_once 'functions.php';
require_once 'rprocess.php';

displayHeader();

try{
    $conn = new PDO(DB, DBUSER, DBPASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {}
?>
<nav>
    <a href="index.php">Home</a>
</nav>
    <input type="submit" value="submit" onclick=document.location.href='roomsform.php'>
<?php
        $edit = '<a href="roomsform.php?edit=$row["id"]">Edit</a>';
        $delete = '<a href="roomsform.php?delete=$row["id"]">Delete</a>';
        $sql = "SELECT * FROM Rooms";
        foreach($conn->query($sql) as $row){
            echo $row['BuildingID'] . $edit . $delete;
            echo $row['RoomNumber'] . $edit . $delete;
            echo $row['Capacity'] . $edit . $delete;
        }

displayPageFooter();
?>
