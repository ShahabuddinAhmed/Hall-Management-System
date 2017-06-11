<!DOCTYPE html>
<html>

    <head>
        <title>Hall Management System</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="search/search.css">
    </head>

    <style>
    

        body
        {
            margin: 0px;
            padding: 0px;
            height: 100%;
            background-color: rgba(0,0,0,0.7); 
            background: url("Picture/sabash-bangladesh-opt.jpg") fixed center;
            background-size: cover;

        }

        a
        {
            text-decoration: none;
        }

        nav ul
        {
            margin: 0;
            color: white;
            padding: 0;
            overflow: hidden;
            background-color: rgba(0,0,0,.7);
            text-align: none;
        }
        li.Rig
        {
            float: right;
        }
        
        div.CLS
        {
            position: absolute;
            top: 0px;
            background-color: rgba(0,0,0,.2);
            width: 100%;
        }

        nav ul li
        {
            display: inline-block;
            color: white;
            padding: 20px
        }

        nav ul li:hover
        {
            background-color: #111;
        }

        .Left
        {
            padding: 5px;
            height: 100%;
            background-color: #c1bdba;
        }

        h2
        {
            background-color: rgba(0,0,0,0.7);
        }

        h4.SB
        {
            font-style: italic;
        }
        
        .field-wrap
        {
            position: relative;
            margin-bottom: 40px;
        }

        div.Right
        {
            width: 35%;
            float: center;
            padding: 5px;
            height: 100%;
            background-color: #c1bdba;
        }

        .row.content {height: 950px}

   
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

        @media screen and (max-width: 700px) {

            
            nav ul li{
                box-sizing: border-box;
                width: 100%;
                padding: 15px;
                text-align: center;

            }
            .handle
            {
                display: block;
            }
        }

    </style>

    <body>
        
        <div class="CLS">
        <nav>

            <ul>
                <a  href="HallManagementSystem.php"><li> Home </li></a>
                <a  href="Contact.php"><li> Contact </li></a>
                <a  href="About.php"><li> About </li></a>
                <a  href="StudentLogin.php"><li class="Rig"> Student Login</li></a>
                <a  href="AdministrationLogin.php"><li class="Rig"> Administration Login</li></a>
            </ul>
            
            <br>
            <br>
            <br>
            <br>
            <br>
        </nav>

        <div class="container">
            <div class="row content">
                <div class="col-md-7">
                    <div>
                        <ul class = "Left1">
                            <li class = "Left2"><a class = "Left3" href="NoticeBoard.php"> Notice Board </a></li>
                            <li class = "Left2"><a class = "Left3" href="Admin.php"> Administration </a></li>
                            <li class = "Left2"><a class = "Left3" href="HallLibrary.php"> Hall Library </a></li>
                            <li class = "Left2"><a class = "Left3" href="Dining.php"> Dining </a></li>
                            <li class = "Left2"><a class = "Left3" href="Canteen.php"> Canteen </a></li>
                            <li class = "Left2"><a class = "Left3" href="EmergencyContact.php"> Emergency Contact </a></li>
                            <li class = "Left2"><a class = "Left3" href="HouseTutor.php"> House Tutor </a></li>
                            <li class = "Left2"><a class = "Left3" href="HallStuff.php"> Hall Stuff </a></li>
                            <li class = "Left2"><a class = "Left3" href="HallMosque.php"> Hall Mosque </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h2 style="color:white">View Student Information</h2>
                        <div class="field-wrap">
                            <div class="align">

                                <div class="grid">

                                    <form action="ViewStudentInformation.php" method="post" class="search">

                                        <div class="form__field">
                                            <input type="search" name="abs" placeholder="Entire Student ID" class="form__input">
                                            <input type="submit" name="abs1" value="Search" class="button">
                                        </div>

                                    </form>

                                </div>

                            </div>
                        </div> 
                        <br>
                        <br>
                        <br>
                        <h2 style="color:white">Info Room</h2>
                        <div class="field-wrap">
                            <div class="align">

                                <div class="grid">

                                    <form action="ViewRoomInformation.php" method="post" class="search">

                                        <div class="form__field">
                                            <input type="search" name="search" placeholder="Entire Room Number" class="form__input">
                                            <input type="submit" value="Search" class="button" onClick="document.location.href='ViewStudentInformation.php'">
                                        </div>

                                    </form>

                                </div>

                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-md-1">

                </div>
            </div>
        </div>
        <footer>
            <h3> All Rights Reserved By</h3>
            <h4> Group of Undefined: CSE RU-2013-14</h4>
        </footer>
        </div>
    </div>
    </body>

</html>