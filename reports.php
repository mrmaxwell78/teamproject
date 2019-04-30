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
        $sql = "SELECT b.BuildingID, b.BuildingNo, b.BuildingName, r.RoomID, r.RoomNumber, r.Capacity, r.Count, c.Vendor, c.Model, c.MemorySize, c.StorageSize
	FROM Buildings b, Rooms r, Computers c
	WHERE b.BuildingID = '$key'";
        
        $result = $conn-query($sql);

        if($result >= 1){
           echo $results;
            }
        }
    ?>
</body>
</html>
