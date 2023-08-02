<?php
    $title="plant";
    include "header.php";

    //1. Establish a connection to the Database
    include "connection.php";
    //2. Prepare the query
    $query = "SELECT * FROM plant";
    //3. Execute the query
    $result = mysqli_query($con,$query);
    //4. Process Data
    $plant = array();	
    while($row = mysqli_fetch_assoc($result)){
		$plant[$row["plantNo"]] = array(
			"plantNo" => $row["plantNo"]
		);	
}
?>
<script type="text/javascript" src="js/popup.js"></script>
<div class="wrapper" style="width:90%; align-self:center; text-align:center; margin-left: 13%">
    <form method="GET" action="equipment.php">
    <ul class="boxHolder">
    <?php foreach($plant as $key => $item) { ?>
	            <li>
	                <a href="equipment.php?plantNo=<?php echo $key ?>">
	                    <div class="box"><?php echo "Plant-".$item['plantNo']; ?></div>
	                </a>
	            </li>
    <?php } ?>
    </ul>
    <a href="addNewPlant.php" class="add">
        <img src="img/addIcon.png" width="30px" height="30px">
    </a>
    </form>
</div>
<?php include "footer.php" ?>
