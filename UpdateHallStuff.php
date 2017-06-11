<!DOCTYPE html>
<html>

    <head>
        <title>Update Hall Staff</title>
        <meta charset="UTF-8">
        <title>Admit Student</title>
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="csss/style.css">
    
    </head>

    <style>

        body
        {
            margin: 0px;
            padding: 0px;
            height: 100%;
            background-color: #c1bdba; 
        }

        select.mySelect
        {
            height: 35px;
            color: #ffffff;
            width: 100px;
            border: 1px solid #c1bdba;
            background: rgba(19, 35, 47, 0.9);
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
                <h1>Enter Information</h1>
                <form action="UpdateHallStuffTm.php" method="post" name="UpdateHallStuff">
                    <select name="abcd" class="mySelect">
                        <option style="color: white" value="" >Select A Staff.</option>
                        <option style="color: white" value="1">Staff 1</option>
                        <option style="color: white" value="2">Staff 2</option>
                        <option style="color: white" value="3">Staff 3</option>
                        <option style="color: white" value="4">Staff 4</option>
                        <option style="color: white" value="5">Staff 5</option>
                        <option style="color: white" value="6">Staff 6</option>
                        <option style="color: white" value="7">Staff 7</option>
                        <option style="color: white" value="8">Staff 8</option>
                        <option style="color: white" value="9">Staff 9</option>
                        <option style="color: white" value="10">Staff 10</option>
                </select>

                    <div class="field-wrap">
                        <br>
                        <label>
                            Entire Staff Name<span class="req">*</span>
                        </label>
                        <input name="t_name" type="text" required autocomplete="off" maxlength="25"/>
                    </div>
                    <div class="field-wrap">
                        <label>
                            Entire Phone Number<span class="req">*</span>
                        </label>
                        <input name="t_phon" type="text"required autocomplete="off" maxlength="25"/>
                    </div>

                    <div class="field-wrap">
                        <br>
                        <textarea name="about"  type="text" rows="15" maxlength="995">

                        </textarea>
                    </div>
                    <button type="submit" class="button button-block"/>Submit</button>
                </form>
            </div>
        </div> <!-- /form -->
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/index.js"></script>
    </body>
</html>