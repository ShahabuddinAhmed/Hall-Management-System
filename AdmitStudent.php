<!DOCTYPE html>
<html>

    <head>
        <title>Admit Student</title>
        <meta charset="UTF-8">
        <title>Admit Student</title>
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">

    </head>

    <style>

        body
        {
            margin: 0px;
            padding: 0px;
            height: 100%;
            background-color: #c1bdba; 
        }

        input.rd
        {
            color: #ffffff;
        }

        div.Top
        {
            width: 100%;
            padding: 0px;
            background-color: #333;
        }

        ul.Top1
        {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
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
            padding: 17px 17px;
            text-decoration: none;
        }
        select.mySelect
        {
            font-size: 22px;
            display: block;
            width: 100%;
            height: 100%;
            padding: 5px 10px;
            background: rgba(19, 35, 47, 0.9);
            background-image: none;
            border: 1px solid #a0b3b0;
            color: #ffffff;
            border-radius: 0;
            -webkit-transition: border-color .25s ease, box-shadow .25s ease;
            transition: border-color .25s ease, box-shadow .25s ease;
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

        a:hover
        {
            background-color: #111;
        }


    </style>

    <body>
        <div class = "Top">
            <ul class = "Top1">
                <li class = "Top2"> <?php echo '<a class = "Top4" href="HallManagementSystem.php">Home</a>';?> </li>
            </ul>
            </div>
        <div class="form">
            <div class="tab-content"> 
                <h1>Enter Student's Information</h1>
                <form action="Admit.php" method="post">
                    <div class="top-row">
                        <div class="field-wrap">
                            <label>
                                First Name<span class="req">*</span>
                            </label>
                            <input name="fname" type="text" required autocomplete="off" />
                        </div>

                        <div class="field-wrap">
                            <label>
                                Last Name<span class="req">*</span>
                            </label>
                            <input name="lname" type="text"required autocomplete="off"/>
                        </div>
                    </div>
                    <div  class="field-wrap">

                        <input name="birth" type="date" required autocomplete="off"/>
                    </div>
                    <div class="field-wrap">
                        <label>
                            Roll<span class="req">*</span>
                        </label>
                        <input name="roll" type="text"required autocomplete="off"/>
                    </div>
                    <div class="field-wrap">
                        <label>
                            Dept.<span class="req">*</span>
                        </label>
                        <input name="dept" type="text"required autocomplete="off"/>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Session<span class="req">*</span>
                        </label>
                        <input name="session" type="text"required autocomplete="off"/>
                    </div>
                    <div class="field-wrap">
                        <label>
                            Alloted Room<span class="req">*</span>
                        </label>
                        <input name="room" type="text"required autocomplete="off"/>
                    </div>
                    <div class="field-wrap">
                        <label>
                            Address<span class="req">*</span>
                            </label>
                        <input name="addr" type="text"required autocomplete="off"/>
                    </div>
                    <div class="field-wrap">
                        <label>
                            Mobile Number<span class="req">*</span>
                            </label>
                        <input name="mobile" type="text"required autocomplete="off"/>
                    </div>

                    <div class="field-wrap">
                        <select name="roomType" class="mySelect">
                            <option value="">Room Type</option>
                            <option value="1">Single Seat</option>
                            <option value="2">Double Seat</option>
                            <option value="3">Four Seat</option>
                        </select>
                    </div>
                    <div class="field-wrap">
                        <select name="year" class="mySelect">
                         <option value=""> Select Year</option>
                            <option value=" 1st Year">1st Year</option>
                            <option value="2nd Year">2nd Year</option>
                            <option value="3rd Year">3rd Year</option>
                            <option value="4th Year">4th Year</option>
                            <option value="Masters">Masters</option>
                        </select>
                    </div>


                    <button type="submit" class="button button-block"/>Submit</button>
                </form>
            </div>
        </div> <!-- /form -->
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/index.js"></script>
    </body>
</html>