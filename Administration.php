<?php
    session_start();
    if(!isset($_SESSION['ID']) || empty($_SESSION['ID']) || $_SESSION['ID']!="admin" ){
        header('location:HallManagementSystem.php'); 
    }

?>



<!DOCTYPE html>
<html>

    <head>
        <title>Administration</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    </head>

    <style>
    

        body
        {
            margin: 0px;
            padding: 0px;
            height: 100%;
            background-color: #c1bdba;
            background: url("Picture/bb.PNG") fixed center;
            background-size: cover;
        }

        div.CLS
        {
            position: absolute;
            top: 0px;
            background-color: rgba(0,0,0,.2);
            width: 100%;
        }

        div.Top
        {
            width: 100%;
            padding: 0px;
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
            padding: 0px;
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
            padding: 20px 20px;
            text-decoration: none;
        }
        
        li.Rig
        {
            float: right;
        }

        .Left
        {
            padding: 5px;
            height: 100%;
            background-color: #c1bdba;
        }

        div.Right
        {
            width: 35%;
            float: right;
            padding: 5px;
            height: 100%;
            background-color: #c1bdba;
        }
        .row.content {height: 850px}

   
        footer{
            width: 100%;
            padding: 5px;
            color: white;
            text-align: center;
            background-color: rgba(0,0,0,.7);
        }


        ul.Left1
        {
            list-style-type: none;
            margin: 0;
            padding: 0;
            float: center;
            width: 220px;
            background-color: rgba(0,0,0,.7);
            border: 1px solid #555;
            text-align: center;
        }

        li.Left2
        {
            text-align: center;
            border-bottom: 1px solid #555;
            last child
        }


        a.Left3
        {
            display: block;
            color: #000;
            color: white;
            padding: 12px 16px;
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

    </style>

    <body>
        

        <div class="CLS">

            <div class = "Top">

                <ul class = "Top1">
                    <li class = "Top2"> <a class = "Top4" href="HallManagementSystem.php">Home</a> </li>
                    <li class = "Top2"> <a class = "Top4" href="LogOut.php"> LogOut </a> </li>
                </ul>
            </div>
            <br>
                <br>
                <br>
                <br>
                <br>

            <div class="container">
                <div class="row content">
                    <div class="col-md-6">
                        <div>
                            <ul class = "Left1">
                                <li class = "Left2"><a class = "Left3" href="UpdateNoticeBoard.php"> Add Notice </a></li>
                                <li class = "Left2"><a class = "Left3" href="Ntctm.php">Delete Notice Board </a></li>
                                <li class = "Left2"><a class = "Left3" href="UpdateAdmin.php"> Update Administration </a></li>
                                <li class = "Left2"><a class = "Left3" href="UpdateHallLibrary.php"> Update Hall Library </a></li>
                                <li class = "Left2"><a class = "Left3" href="UpdateDining.php"> Update Dining </a></li>
                                <li class = "Left2"><a class = "Left3" href="UpdateCanteen.php"> Update Canteen </a></li>
                                <li class = "Left2"><a class = "Left3" href="UpdateEmergencyContact.php"> Update Emergency Contact </a></li>
                                <li class = "Left2"><a class = "Left3" href="UpdateHouseTutor.php"> Update House Tutor </a></li>
                                <li class = "Left2"><a class = "Left3" href="UpdateHallStuff.php"> Update Hall Stuff </a></li>
                                <li class = "Left2"><a class = "Left3" href="UpdateHallMosque.php"> Update Hall Mosque </a></li>
                                <li class = "Left2"><a class = "Left3" href="UpdateAbout.php"> Update About </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <br>
                            <br>
                            <br>
                            <ul class = "Left1">
                                <li class = "Left2"><a class = "Left3" href="AdmitStudent.php">Admit Student</a> </li>
                                <li class = "Left2"><a class = "Left3" href="ViewStudentComplain.php"> View Student Complain </a></li>
                                <li class = "Left2"><a class = "Left3" href="StudentPayment.php">Student Payment</a></li>
                                <li class = "Left2"><a class = "Left3" href="UpdateStudentInformation.php"> Update Student Information </a></li>
                                <li class = "Left2"><a class = "Left3" href="ViewRoomInfo.php"> View Room Info </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <h3> All Rights Reserved By</h3>
                <h4>Bangladesh University ICT Center</h4>
            </footer>
            </div>
        </div>
    </body>

</html>