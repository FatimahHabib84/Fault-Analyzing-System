<?php
    $title="equipments";
    include "header.php";

    //1. Establish a connection to the Database
    include "connection.php";
    //2. Prepare the query
    $id=$_GET["plantNo"];
    $query = "SELECT * FROM equipment WHERE plantNo='$id' ";
    //3. Execute the query
    $result = mysqli_query($con,$query);
    //4. Process Data
    $equipmentNo = array();	
    while($row = mysqli_fetch_assoc($result)){
		$equipmentNo[$row["equipmentNo"]] = array(
			"equipmentNo" => $row["equipmentNo"]
		);	
}
?>
<div class="wrapper">
<form method="GET" action="device.php">
    <ul class="boxHolder">
    <?php foreach($equipmentNo as $key=>$item) { ?>
	            <li>
	                <a href="device.php?equipmentNo=<?php echo $key?>">
	                    <div class="box"><?php echo $item['equipmentNo']; ?></div>
	                </a>
	            </li>
    <?php } ?>
    </ul>
    <a href="addNewEquip.php" class="add">
    <img src="img/addIcon.png" width="30px" height="30px">
    </a>
    </form>
</div>
<?php include "footer.php" ?>
