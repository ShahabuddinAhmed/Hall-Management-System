<!DOCTYPE html>
<html>

    <head>
        <title>Update Canteen</title>
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
                <form action="UpdateCanteenTm.php" method="post" name="UpdateCanteen">
                    <div class="field-wrap">
                        <textarea name="about" type"text" rows="15" maxlength="995">

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