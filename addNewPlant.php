<?php
    $title="add new plant";
    include "header.php";
    include "connection.php";
    if  (isset($_POST['add'])) {
        $plantNo = $_POST['plantNo'];
        $sql = "INSERT INTO plant SET plantNo = '$plantNo'";
        $result = mysqli_query($con,$sql);
        if($result){
            header("location: addNewPlant.php?status=1");
            exit();
        }
        else{
            header("location: addNewPlant.php?status=0");
            exit();
        }
    }
?>
<?php if(isset($_GET['status']) and $_GET['status']==1){ ?>
        <h1>Successfull</h1>
        <?php } else if(isset($_GET['status']) and $_GET['status']==0){ ?> 
        <h1>Sorry, this plant is already exist</h1>
        <?php } else { ?>
    <div class="wrapper">
    <form name="form"  method="POST" action="addNewPlant.php">
            <table>
                <tr>
                    <th><label for="plantNo"> <b>Enter the plant number: </b> </label></th>
                    <td><input required type="text" name="plantNo" id="plantNo"></td>
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
    <?php include "footer.php" ?>
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
