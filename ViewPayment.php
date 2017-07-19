<?php

session_start();
                $ROL=$_SESSION["ID"] ;
?>



<!DOCTYPE html>
<html>

    <head>

        <title>Student Complain</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <style>

        body
        {
            margin: 0px;
            padding: 0px;
            height: 100%;
            background-color: #c1bdba;
            background-size: cover;
        }

        div.Top
        {
            width: 100%;
            padding: 0px;
        }

        div.CLS
        {
            position: absolute;
            top: 0px;
            background-color: rgba(0,0,0,.2);
            width: 100%;
        }

        div.Middle
        {
            width: 100%;
            padding: 0px;
            height: 600px;
            text-align: center;
            background-color: none;
        }

        ul.Top1
        {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: rgba(0,0,0,.7);
        }

        li.Top2
        {
            float: left;
        }

        li.Top3
        {
            float: right;
        }

        a.Top4
        {
            display: block;
            color: white;
            text-align: center;
            padding: 20px;
            text-decoration: none;
        }

        a:hover
        {
            background-color: #111;
        }

        li:last-child
        {
            border-bottom: none;
        }

        .container {
            padding: 60px 120px;
        }

        @media (max-width: 600px) {
            .container {
                /*NOtice padding: */
                padding: 50px 20px;
            }
        }

        .cls_ntc {
            padding: 10px 10px 10px 350px;
            background-color: #7d4627;
            color: white;
            font-size: 22px;
            border-radius: 5px;
            margin: 3px 3px 10px 3px;
            -webkit-box-shadow: 0 6px 6px -6px #0E1119;
            -moz-box-shadow: 0 6px 6px -6px #0E1119;
            box-shadow: 0 6px 6px -6px #0E1119;
    }

    </style>

    <body>
        <div class="CLS">
            <!-- ==========Here Top Divition========= !-->
            <div class = "Top">
                <ul class = "Top1">
                    <li class = "Top2"> <?php echo '<a class = "Top4" href="HallManagementSystem.php">Home</a>';?> </li>
                </ul>
            </div>
        </div>
        <br>
        <br>

        <div class="container">

        <?php


            include 'dbconnect.php';
            $sql = "SELECT Roll, Yer, Jan, Feb, Mar, Apr, May, Jun, Jul, Aug, Sept, Oct, Nov, Decm  FROM payment where Roll=$ROL";
                $result = $conn->query($sql);
                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()) {
                         if($row["Jan"]=="")
                         {
                            $row["Jan"]="N/A";
                         }
                         if($row["Feb"]=="")
                         {
                            $row["Feb"]="N/A";
                         }
                         if($row["Mar"]=="")
                         {
                            $row["Mar"]="N/A";
                         }
                         if($row["Apr"]=="")
                         {
                            $row["Apr"]="N/A";
                         }
                         if($row["May"]=="")
                         {
                            $row["May"]="N/A";
                         }
                         if($row["Jun"]=="")
                         {
                            $row["Jun"]="N/A";
                         }
                         if($row["Jul"]=="")
                         {
                            $row["Jul"]="N/A";
                         }
                         if($row["Aug"]=="")
                         {
                            $row["Aug"]="N/A";
                         }
                         if($row["Sept"]=="")
                         {
                            $row["Sept"]="N/A";
                         }
                         if($row["Oct"]=="")
                         {
                            $row["Oct"]="N/A";
                         }
                         if($row["Nov"]=="")
                         {
                            $row["Nov"]="N/A";
                         }
                         if($row["Decm"]=="")
                         {
                            $row["Decm"]="N/A";
                         }

                        echo'
                        <div class="cls_ntc ">
                        <br>
                        <h1 style="color:black">Student Payment Information</h1>
                        <p> <strong>Roll:</strong> '.$row["Roll"].'</p>
                        <p> <strong>Year:</strong> '.$row["Yer"].'</p>
                        <p> <strong>Jan:</strong> '.$row["Jan"].'</p>
                        <p> <strong>Feb:</strong> '.$row["Feb"].'</p>
                        <p> <strong>Mar:</strong> '.$row["Mar"].'</p>
                        <p> <strong>Apr:</strong> '.$row["Apr"].'</p>
                        <p> <strong>May:</strong> '.$row["May"].'</p>
                        <p> <strong>Jun:</strong> '.$row["Jun"].'</p>
                        <p> <strong>Jul:</strong> '.$row["Jul"].'</p>
                        <p> <strong>Aug:</strong> '.$row["Aug"].'</p>
                        <p> <strong>Sept:</strong> '.$row["Sept"].'</p>
                        <p> <strong>Oct:</strong> '.$row["Oct"].'</p>
                        <p> <strong>Nov:</strong> '.$row["Nov"].'</p>
                        <p> <strong>Decm:</strong> '.$row["Decm"].'</p>
                        <br>
                        <br>
                    </div>
                    ';
                    }
                }else{
                    echo'<h2>No Payment even occur</h2>';
                }
                $conn->close();
        ?>

        </div>
    </body>
</html>