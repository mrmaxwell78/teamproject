<!DOCTYPE html>
<html>
<head>
	<title>Team Project One</title>
</head>

<body>
<form action="" method=POST>
    <!-- This is to create something to search the database-->
    <input type="search" name="keyword" placeholder="Search">
    <input type="submit" name="srchbtn" value="Search">
    </form>
    <?php if(isset($_POST['srchbtn'])){//Something along the lines of this to search the db
        $key = $_POST['keyword'];
        $sql = "SELECT * FROM Buildings WHERE BuildingID LIKE $key";
        $result1 = $conn->query($sql);
        $sql1 = "SELECT RoomNumber, Capacity FROM Rooms WHERE BuildingID LIKE $key";
        $result2 = $conn->query($sql1);
        $sql2 = "SELECT ComputerID, Count FROM RoompComputers WHERE BuildingID LIKE $key";
        $result3 = $conn->query($sql2);
        $sql3 = "SELECT VendorID, Model, MemorySize, StorageSize FROM Computers WHERE RoomID = RoomID(RoomComputers)";
        $result4 = $conn->query($sql3);
        
        $result = array($result1, $result2, $result3, $result4);

        if($result >= 1){
           print_r($results);
            }
        }
    ?>
</body>
</html>
