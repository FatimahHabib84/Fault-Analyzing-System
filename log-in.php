
<?php 
include "connection.php";
if (isset($_POST['login'])) {
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

   
    $query = "SELECT * FROM log_in WHERE uname ='$uname' and pass = '$pass' limit 1";
    
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1){     
        header("location: plant.php");
        exit();
    }else{
        header("location: log-in.php?status=0");
         exit();
     }} ?>
        
<html>
    <head><title>log in</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <style>
            body{

                color:#fef6e7;
                font-family: "freesansmedium", sans-serif;
                font-size: 14px;
                background-image: url('img/Picture1.png');background-repeat: no-repeat;
                background-attachment: fixed; background-size: 100% 100%;
            }
            .homewrapper{
                width:50%;
                align-self: flex-start;
                float:left;
            }
            .leggend{
                position:relative;
                color:black;
                background-color:#314e52;
                width: 80px;
                text-align:center;
            }
            form tr td input[type="text"], form tr td input[type="password"]{
                width:285px;
                height:50px;
                align-self: flex-start;
                border: 4px groove #e7e6e1;
            }
            
            form{
                align-self:center;
                margin-left:155px;
                background-image:none;
            }
            table{
                background-color:transparent;
            }
           .errMsg{
            width:285px; color:#f2a150; text-align:center;
           }
           .footer{
                background-color:transparent;
                position: absolute;
                font-size:12px;
                left: 31%;
                bottom:-8%;
                width: 100%;
            }
        </style>
    </head>
    <body class="home">
        <div class="homewrapper"> 
            <img src="img/logo.png" style="hight: 20%; width: 20%; margin:7% 0 0 35%;">
            <div style="display:flex; flex-flow: row; margin:0 0 0 25%;">
                <div style="align-self:flex-end; margin-bottom:10px; font-size:20px;">Welcome back&ensp;</div>
                <div style="text-align:left; font-size: 60px; margin:0 align-self:flex-end;">Login</div>
            </div>
                <form name="form" method="POST" action="log-in.php">
                    <table>
                        <tr>
                            <td><input required type="text" name="uname" id="uname"></td>
                        </tr>
                        <tr>
                            <td><input required type="password" name="pass" id="pass"></td>
                        </tr>
                        <tr>
                                <td><h4 class="errMsg">
                                    <?php if(isset($_GET['status']) and $_GET['status']==0){ 
                                        echo "sorry, the user name or password is wrong!"; } ?>
                                </h4></td>
                            </tr>
                        <tr >
                            <td><input type="submit" name ="login" onclick="log()" value="Log in"></td>
                        </tr>
                    </table>
                </form>
                <div class="leggend" style="margin-top:-265px; margin-left:230px;"><b>User Name</b></div>
                    <div class="leggend" style="margin-top:50;  margin-left:230px;"><b>Password</b></div>
        </div>
        <script type="text/javascript" src="js/form.js"></script>
    </body>
    <footer>
   <p class="footer">Fault Analyzing System&ensp;&copy;2022 Fatimah Habib.</p></footer>
    
