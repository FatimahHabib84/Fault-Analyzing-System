<?php
    $title="add new device";
    include "header.php";
    include "connection.php";
    if  (isset($_POST['add'])) {
        $plantNo = $_POST['plantNo'];
        $equipmentNo = $_POST['equipmentNo'];
        $tagNo = $_POST['tagNo'];
        $sql = "INSERT INTO `device` (`tagNo`, `pNo`, `eNo`) VALUES ('$tagNo', '$plantNo', '$equipmentNo');";
        $result = mysqli_query($con,$sql);
        if($result){
            header("location: addNewDevice.php?status3=1");
            exit();
        }
        else{
            header("location: addNewDevice.php?status3=0");
            exit();
        }
    }
?>
<?php if(isset($_GET['status3']) and $_GET['status3']==1){ ?>
        <h1>Successfull</h1>
        <?php } else if(isset($_GET['status3']) and $_GET['status3']==0){ ?> 
        <h1>Sorry, this device is already exist or you enter wrong info!</h1>
        <?php } else { ?>
    <div class="wrapper">
    <form name="form"  method="POST" action="addNewDevice.php" style="color:#f7f6f7;">
            <table>
                <tr>
                    <th><label for="plantNo"> <b>Enter the plant number: </b> </label></th>
                    <td><input required type="text" name="plantNo" id="plantNo"></td>
                </tr>
                <tr>
                <td></td>
                    <td><span class="err">this field is required!! </span></td>
                </tr>
                <tr>
                    <th><label for="equipmentNo"> <b>Enter the equipment number: </b> </label></th>
                    <td><input required type="text" name="equipmentNo" id="equipmentNo"></td>
                </tr>
                <tr>
                <td></td>
                    <td><span class="err">this field is required!! </span></td>
                </tr>
                <tr>
                    <th><label for="tagNo"> <b>Enter the tag number: </b> </label></th>
                    <td><input required type="text" name="tagNo" id="equipmentNo"></td>
                </tr>
                <tr>
                <td></td>
                    <td><span class="err">this field is required!! </span></td>
                </tr>
                <td></td>
                    <td>
                        <div style="display:flex; flex-flow:row; margin-top:10%;">
                            <button type="submit" name="add"><img src="img/addIcon.png" height="30px" width="30px"></button>
                            <button type="reset" name="reset"><img src="img/resetIcon.png" height="30px" width="30px"></button>
                        </div>
                 </td>
            </table>
        </form>
        </div>
        <?php } ?>
        
    </body>
    <style>
    form{
        color:#f7f6f7;
        text-align:center;
        
    }
    button[type="reset"],  button[type="submit"]{
        border: 0px solid transparent;
        margin-left:0;
        padding-left:0;
        text-align:left;
    }
    td{
        width:300px;
    }
    label, th{
        width:120px;
    }
    table{
        margin-top:5%;
        margin-left:20%;
        text-align:center;
    }
</style>
    <?php include "footer.php" ?>
