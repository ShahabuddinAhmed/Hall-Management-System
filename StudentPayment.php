<!DOCTYPE>
<html>

	<head>

		<title>Student Payment</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

	</head>

	<style>

        table
        {
            border-collapse: collapse;
            text-align: center;
            background: rgba(19, 35, 47, 0.9);
            color: white;
        }

        h1
        {
            font-size: 1.6em;
            color: white;
        }

        table, td, th
        {
            border: 2px solid #c1bdba;
            text-align: center;
            width: 100px;
            height: 30px;
        }

        body
		{
			margin: 0px;
        	padding: 0px;
        	height: 100%;
        	background-color: #c1bdba;
            background-size: cover;
            font-family: 'Titillium Web', sans-serif;
		}

        div.In
        {
            height: 15px;
            width: 30px;
            border: 2px solid red;
        }

		div.Top
        {
            width: 100%;
            padding: 0px;
        }
        option
        {
            background: rgba(19, 35, 47, 0.9);
        }
        select.mySelect
        {
            height: 35px;
            width: 100px;
            color: white;
            border: 2px solid #c1bdba;
            background: rgba(19, 35, 47, 0.9);
        }
        input.MyInput
        {
            border: 2px;
            width: 130px;
            height: 35px;
            color: white;
            background: rgba(19, 35, 47, 0.9);
        }
        
        form.MyForm
        {
            border: 2px solid #c1bdba;
            border-radius: 4px;
            padding: 3px;
            height: 45px;
            width: 140px;
            background: rgba(19, 35, 47, 0.9);
            font-family: 'Titillium Web', sans-serif;
        }

        div.CLS
        {
            position: absolute;
            top: 0px;
            background-color: rgba(0,0,0,.2);
            width: 100%;
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
            padding: 20px 20px;
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

        .row.content
        {
            height: 750px;
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

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            


            <!-- ==========Here Middle Division========= !-->
            
            <div class="container">
                <div class="row content">
                    <form role="form" action="StudentPaymentTm.php" method="post" name="regform">
                        <div class="form-group">
                          <input type="text" class="form-control" id="ID" name="ID" maxlength="30" placeholder="Student ID.">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" id="Year" name="Year" maxlength="4" placeholder="Year">
                        </div>


                        <div class="container-fluid well" style="border-color: black">
                            <div class="col-sm-6">
                                <div class="checkbox">
                                    <label><input type="checkbox"  name="chk[]" value="Jan">January.</label>
                                </div>
                                <div class="checkbox">
                                  <label><input type="checkbox" name="chk[]" value="Feb">February.</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="chk[]" value="Mar">March.</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="chk[]" value="Apr">April.</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="chk[]" value="May">May</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="chk[]" value="Jun">Jun</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="chk[]" value="Jul">July.</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="chk[]" value="Aug">Aug</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="chk[]" value="Sept">September</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="chk[]" value="Oct">Octobor.</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="chk[]" value="Nov">November</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="chk[]" value="Decm">Decm</label>
                                </div>
                            </div>
                        </div>

                    <div class="col-md-1">
                        <br>
                        <input class="MyInput" type = "submit" name = "post" value = "Submit">  
                    </div>
                    </form>
                </div>
            </div>
    	</div>

	</body>

</html>