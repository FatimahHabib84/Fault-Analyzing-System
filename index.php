<?php
include "connection.php";
?>
<html>
    <head>
        <title>home</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <style>
            body{

                color:#fef6e7;
                font-family: "freesansmedium", sans-serif;
                font-size: 14px;
                background-image: url('img/Picture1.png');background-repeat: no-repeat;
                background-attachment: fixed; background-size: 100% 100%;
            }
            
        .home .boxs a{
            margin-top:10px;
            color: #f2a154 !important;
            text-decoration: none !important;  
        }
        .home .boxs a:hover,  .home .boxs a:active{
            color:#e7e6e1;
        }
        .home .boxs{
            border-radius:100px;
            width:75px;
            padding: 5px;
            margin:10px 0 0 90px;
            border: 1px solid #e7e6e1;

        }
            .footer{
                background-color:transparent;
                position: absolute;
                font-size:12px;
                left: 31%;
                top:94%;
                width: 100%;
                padding:0;
            }
        </style>
    </head>
    <body class="home">
        <div style="width:50%; display:flex; flex-flow:column;">
            <img src="img/logo.png" style="hight: 20%; width: 20%; margin:7% 0 0 35%;">
            <div style="text-align:center; font-size: 60px; margin:0">Welcome</div>
            <div style="hight: 1px; width:45%; border-top:1px solid #fef6e7; margin: 0 0 1% 27%;">&ensp;</div>
            <div  style="text-align:center; width:40%; margin: 0 0 0 30%; font-weight: lighter; line-height: 1.5em;">finding easy solutions and creating practical ways to solve them is our mission. our priority is to work diligently and carefully, so this system was created to organize the work that takes place in the laboratories and to know the previous problems of one of the equipments to find a quick solution by knowing the roots of the problem.</h1>
            <div class="boxs"><a href="log-in.php">log in</a></div>
        </div>
    </body>
    <footer>
   <p class="footer">Fault Analyzing System&ensp;&copy;2022 Fatimah Habib.</p></footer>
