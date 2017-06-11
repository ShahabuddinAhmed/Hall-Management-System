<!DOCTYPE html>
<html>

    <head>

        <title>Emergency Contact</title>
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
        form
        {
            border: 2px solid blue;
            background-color: #c1bdba;
            padding: 30px;
            height: 500px;
            width: 600px;

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
             
        }
        @media screen and (max-width: 700px) {
        .container{
                /*NOtice padding: */
                width: 100%;
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
            </br>
            </br>
            </br>
            </br>

        <div class="container"> 
                <form action="UpdateHouseTutorTm.php" method="post" name="UpdateHouseTutor">
                    <select name="abc" class="form-control">
                        <option style="color: #303036" value="">Select A Name.</option>
                        <option style="color: black" value="1">Name 1</option>
                        <option style="color: black" value="2">Name 2</option>
                        <option style="color: black" value="3">Name 3</option>
                        <option style="color: black" value="4">Name 4</option>
                        <option style="color: black" value="5">Name 5</option>
                        <option style="color: black" value="6">Name 6</option>
                    </select>

                    <div class="form-group">
                      <label for="usr">Name:</label>
                      <input type="text" name="t_name" class="form-control" id="usr" placeholder="Teacher Name..." maxlength="25">
                    </div>
                    <div class="form-group">
                      <label for="usr">Phone Number:</label>
                      <input type="text" name="t_name" class="form-control" id="usr" placeholder="Entire Phone Number..." maxlength="25">
                    </div>
                    <button type="submit" class="btn btn-rimary btn-sm" >SUBMIT</button>
                </form>
            
        </div>
    </body>
</html>