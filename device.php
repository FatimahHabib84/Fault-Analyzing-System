<?php
    $title="Devices";
    include "header.php";

    //1. Establish a connection to the Database
    include "connection.php";
    //2. Prepare the query
    $id2 = $_GET["equipmentNo"];
        $query = "SELECT * FROM device WHERE eNo='$id2'";
        //3. Execute the query
        $result = mysqli_query($con,$query);
        //4. Process Data
        $device = array();	
        while($row = mysqli_fetch_assoc($result)){
            $device[$row["tagNo"]] = array(
                "tagNo" => $row["tagNo"],
            );	
        }
?>
<div class="wrapper">
    <form method="GET" action="deviceContent.php">
    <ul class="boxHolder">
    <?php foreach($device as $key =>$item) { ?>
	            <li>
	                <a href="deviceContent.php?tagNo=<?php echo $key; ?>">
	                    <div class="box"><?php echo $item['tagNo']; ?></div>
	                </a>
	            </li>
    <?php } ?>
      
    </ul>
    <a href="addNewDevice.php" class="add">
        <img src="img/addIcon.png" width="30px" height="30px">
    </a>
    </form>
</div>
<?php include "footer.php" ?>
