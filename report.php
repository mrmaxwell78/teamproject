<!DOCTYPE html>
<html>
<head>
	<title>Team Project One</title>
	<link href="https://fonts.googleapis.com/css?family=Cardo:400,700|Oswald" rel="stylesheet">
	<link href="tableCSS.css" rel="stylesheet">
</head>
<body>
<div id="navbar">
	<nav>
	<a href="index.php">HOME</a><a href="buildings.php">BUILDINGS</a><a href="rooms.php">ROOMS</a><a href="roomcomputers.php">ROOM COMPUTERS</a><a href="computers.php">COMPUTERS</a><a href="vendors.php">VENDORS</a><a href="reports.php" id="selectedpage">REPORTS</a>
	</nav>
	</div>
	<header><h1>Reports</h1></header>
	<main>
<div id="mainContent">
<form action="" method=POST>
    <div style="color: white;">Insert Building ID: </div>
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
</div>
		</main>
		<footer>
			<em>
			<img src="img/group-icon2.png" alt="group icon" height="5%" width="3%">
			<br>Darly Dubreus, Grace Hechavarria, Mathew Maxwell, 
			<br>Manuel Pena, Gregory Toussaint
			<br>copyright &copy; 2019
			</em>
		</footer>
</body>
</html>
</body>
</html>
