<?php
    $title="add new row";
    include "header.php";
    include "connection.php";
    if  (isset($_POST['add'])) {
        $tagNo = $_POST['tagNo'];
        $issue = $_POST['issue'];
        $TECHR = $_POST['TECHR'];
        $result = $_POST['result'];
        $datee = $_POST['datee'];
        $nam = $_POST['nam'];
        $sql = "INSERT INTO `devicecontent` (`issue`, `TECHR`, `result`, `datee`, `nam`, `tagNo`) 
        VALUES ('$issue', '$TECHR', '$result', '$datee', '$nam;', '$tagNo');";
        $result = mysqli_query($con,$sql);
        if($result){
            header("location: addNewRow.php?status4=1");
            exit();
        }
        else{
            header("location: addNewRow.php?status4=0");
            exit();
        }
    }
?>
<?php if(isset($_GET['status4']) and $_GET['status4']==1){ ?>
        <h1>Successfull</h1>
        <?php } else if(isset($_GET['status4']) and $_GET['status4']==0){ ?> 
        <h1>Sorry, this device is already exist or you enter wrong info!</h1>
        <?php } else { ?>
        <style>
           
        </style>
    <div class="wrapper">
    <form name="form"  method="POST" action="addNewRow.php">
            <table>
                <tr>
                    <th><label for="tagNo"> <b>Tag number: </b> </label></th>
                    <td><input required type="text" name="tagNo" id="tagNo"></td>
                </tr>
                
                <tr>
                    <th><label for="issue"> <b>Issue: </b> </label></th>
                    <td><input required type="text" name="issue" id="issue"></td>
                </tr>

                <tr>
                    <th><label for="TECHR"> <b>TECH Report: </b> </label></th>
                    <td><input required type="text" name="TECHR" id="TECHR"></td>
                </tr>

                <tr>
                    <th><label for="result"> <b> Result: </b> </label></th>
                    <td><input required type="text" name="result" id="result"></td>
                </tr>

                <tr>
                    <th><label for="datee"> <b> Date: </b> </label></th>
                    <td><input required type="date" format="dd-mm-yyyy" name="datee" id="datee"></td>
                </tr>

                <tr>
                    <th><label for="nam"> <b> name: </b> </label></th>
                    <td><input required type="text" name="nam" id="nam"></td>
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
    .wrapper{
        margin-bottom:10px;
        }
     form{
        color:#f7f6f7;
        text-align:center;
        height:100%;
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
   
