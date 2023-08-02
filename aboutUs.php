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
        <div style="width:30%; display:flex; flex-flow:column; margin-left:10%;">
            
            <div style="text-align:center; font-size: 30px; margin-top:30%;">About the application</div>
            <div  style="text-align:center; font-weight: lighter; line-height: 1.5em;">
            'Fault Analyzing' site was built in order to facilitate searches for errors. Those errors that are attempted to be resolved 
            in vain sometimes. Having a history and the root of the problem and its details makes it easier for Aramco 
            customers to work and easy to find the root of the problem and solve it.
            </div>
            <div style="text-align:center; font-size: 30px; margin-top:9%; ">About the Team</div>
            <div  style="text-align:center;  font-weight: lighter; line-height: 1.5em;">
                We are 3 members team work who cooprate:<br>The web programmer intern student: Fatimah Alshawmari
                <br>The Instrument: Abdullah Alshawmari.<br>
                The designer  intern student: Hajer Almutawa.<br>
                Rights of ideas belong to Abdullah Alshawmari.
                Website design and color selection by Hajar Al Mutawa.
                The site was implemented and programmed by Fatima Al-Shawmari.

            </div>
        </div>
            
    </body>
    <footer>
   <p class="footer">Fault Analyzing System&ensp;&copy;2022 Fatimah Habib.</p></footer>
