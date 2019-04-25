<?php
require_once 'computers.php';
include('InventoryConnection.php');
?>

<form action="cprocess.php" method="POST">
<label for="VendorID">Vendor</label>
<input type="text" name="VendorID" id="VendorID" value="<?php echo $vendor ?>" required><br>
<label for="Model">Model</label>
<input type="text" name="Model" id="Model" value="<?php echo $model ?>" required><br>
<label for="MemorySize">Memory Size</label>
<input type="text" name="MemorySize" id="MemorySize" value="<?php echo $memory ?>" required><br>
<label for="StorageSize">Storage Size</label>
<input type="text" name="StorageSize" id="StorageSize" value="<?php echo $storage ?>" required><br>
<?php
    if($update == true){
       echo '<button type="submit" name="update">Update</button>';
    } else {
        echo '<button type="submit" value="insert">Insert</button>';
    }
?>
</form>