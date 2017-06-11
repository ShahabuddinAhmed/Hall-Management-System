<!DOCTYPE html>
<html>

    <head>

        <title>Student Information</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        .container{
                /*NOtice padding: */
                padding: 50px 20px;
            }
        }

    </style>

    <body>
        <div class="CLS">
            <!-- ==========Here Top Divition========= !-->
            <div class = "Top">
                <ul class = "Top1">
                    <li class = "Top2"><a class = "Top4" href="HallManagementSystem.php">Home</a></li>
                </ul>
            </div>
        </div>

        <div class=" row container">
            <br>
            <br>
            <br>
            <br>
            <div class="col-md-6">
                <form action="UpdateStudentInformationTm.php" method="post" name="UpdateStudent">
                    <div class="form-group">
                        <label for="usr">Update Year</label>
                        <input type="text" name="t_name" class="form-control" id="usr" placeholder="Entire Student ID..." maxlength="25">
                    </div>
                    <select name="slct" class="form-control">
                        <option style="color: #303036" value="" >Select Year</option>
                        <option style="color: black" value="1st Year">1st Year</option>
                        <option style="color: black" value="2nd Year">2nd Year</option>
                        <option style="color: black" value="3rd Year">3rd Year</option>
                        <option style="color: black" value="4th Year">4th Year</option>
                        <option style="color: black" value="Masters">Masters</option>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-rimary btn-sm" >SUBMIT</button>
                    <br>
                    
                </form>
            </div>
            <div class="col-md-6">
                <form action="UpdateRoom.php" method="post" name="UpdateStudent">
                    <div class="form-group">
                        <label for="usr">Update Room</label>
                        <input type="text" name="t_name1" class="form-control" id="usr" placeholder="Entire Room Number..." maxlength="25">
                    </div>
                    <div class="form-group">
                        <input type="text" name="t_name2" class="form-control" id="usr" placeholder="Entire Student ID..." maxlength="25">
                    </div>
                    <button type="submit" class="btn btn-rimary btn-sm" >SUBMIT</button>
                    <br>
                    <br>
                </form>
                
            </div>
            <div class="col-md-6">
                <form action="delStudent.php" method="post" name="UpdateStudent">
                    <div class="form-group">
                        <label for="usr">Delete Student Information</label>
                        <input type="text" name="t_name" class="form-control" id="usr" placeholder="Entire Student ID..." maxlength="25">
                    </div>
                    <button type="submit" class="btn btn-rimary btn-sm" >SUBMIT</button>
                </form>
            </div>
        </div>            
    </body>
</html>