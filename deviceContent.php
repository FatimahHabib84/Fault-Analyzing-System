<?php
    $title="Devices";
    include "header.php";

    //1. Establish a connection to the Database
    include "connection.php";
    //2. Prepare the query
    $id3 = $_GET['tagNo'];
    $query = "SELECT * FROM devicecontent WHERE tagNo='$id3' " ;
    //3. Execute the query
    $result = mysqli_query($con,$query);
    //4. Process Data
    $device = array();	
    while($row = mysqli_fetch_assoc($result)){
		$device[$row["tagNo"]] = array(
			"tagNo" => $row["tagNo"],
            "issue" => $row["issue"],
            "TECHR" => $row["TECHR"],
            "result" => $row["result"],
            "datee" => $row["datee"],
            "nam" => $row["nam"]
		);	
}

?>
<div class="wrapper" style="width:90%">
    <form>
    <div class="boxHolderDevice">
	                    <table>
                            <tr>
                                <th class="cell" style="border-left: none">Tag No.</th>
                                <th class="cell">Issue</th>
                                <th class="cell">TECH Report</th>
                                <th class="cell">Result</th>
                                <th class="cell">date</th>
                                <th class="cell">Tech Name</th>
                            </tr>

                            <?php foreach($device as $key =>$item) { ?>
                            <tr>
                                <td class="cell"><?php echo $item["tagNo"]; ?></td>
                                <td class="cell"><?php echo $item['issue']; ?></td>
                                <td class="cell"><?php echo $item['TECHR']; ?></td>
                                <td class="cell"><?php echo $item['result']; ?></td>
                                <td class="cell"><?php echo $item['datee']; ?></td>
                                <td class="cell"><?php echo $item['nam']; ?></td>
                            </tr>
                        </table>
                        <?php } ?>
        <div style="display:flex; flex-flow:row; margin-left:45%; margin-top:10%;">
            <a href="addNewRow.php" style="padding:15px;"><img src="img/addIcon.png" height="30px" width="30px"></a>
            <!--<button type="reset" name="reset"><img src="img/resetIcon.png" height="50px" width="50px"></button>-->
        </div>
</div>

      
    </ul>
</form>
</div>
<?php include "footer.php" ?>

<style>
    form{
        margin-top:-10%;
        background-image:none;
        background-color:#314e52;
        width:80%;
        margin-left:-3%;
    }
    .boxHolderDevice table{
    margin: 0px;
    text-align: start;
    width:100%
    }
    .boxHolderDevice table tr th{
        color:#f2a154;
        text-align: start;
        width:250px;
        height:25px;
        
    }
    .boxHolderDevice table tr td{
        color:black;
        text-align: start;
        border-left: 1px solid #314e52;
        border-radius:5px;
        background-color:#f7f6e7;
        width:150px;
        height:35px;
    }
    .boxHolderDevice table tr td:hover, .boxHolderDevice table td:active{
        background-color:#e7e6e1;
        width:152px;
        height:40px;
    }
    .cell{
        padding: 5px;
    }
    button[type="reset"],  button[type="submit"]{
        border: 0px solid transparent;
    }
</style>