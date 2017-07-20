<!DOCTYPE html>
<html>

    <head>
        <title>View Room Info</title>
        <meta charset="utf-8">
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

        div.show
        {
        	text-align: center;
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

        .cls_ntc
        {
            text-align: center;
            background-color: #7d4627;
            color: white;
            border-radius: 5px;
            margin: 3px 3px 10px 3px;
            padding: 20px;
            -webkit-box-shadow: 0 6px 6px -6px #0E1119;
            -moz-box-shadow: 0 6px 6px -6px #0E1119;
            box-shadow: 0 6px 6px -6px #0E1119;
    }

    	.vi
    	{
            text-align: center;
            background-color: green;
            color: white;
            border-radius: 5px;
            margin: 3px 3px 10px 3px;
            padding: 20px;
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
                    <li class = "Top2"> <a class = "Top4" href="HallManagementSystem.php">Home</a> </li>
                </ul>
            </div>  
        </div>
        <br>
        <br>
        <br>
        <br>

        <div class="container">

	        <div class="show">
		        <h1> Ground Floor Room Info </h1>
				<?php
		            include 'dbconnect.php';
		            $sql1 = "SELECT room FROM Floor WHERE room > 100 AND room < 200";
		            $totalBook = 0;
		            $totalBlank = 0;
		            $counter = 0;
	                $result1 = $conn->query($sql1);
	                if($result1->num_rows>0)
	                {
	                    while($row1 = $result1->fetch_assoc())
	                    {
	                        $ab = $row1["room"];
	                        echo'
	                        	<div class="cls_ntc ">
	                        
	                        		<h4> Room No: '.$row1["room"].'</h4>
	                        		
	                    		
	                    	';
	                    	$sql2 = "SELECT one, two, three, four FROM Floor WHERE room = $ab";
	                    	$result2 = $conn->query($sql2);
	                    	//echo $result2;
	                    	while($row2 = $result2->fetch_assoc())
	                    	{
		            			$seatBooking = 0;
		            			$seatBlank = 0;
		            			$roomType = 0;
	                    		//$sum = $row2["one"] + $row2["two"];
	                    		//echo $sum;
	                    		if($row2["one"] == 1)
	                    		{
	                    			$seatBooking = $seatBooking + 1;
	                    		}
	                    		if($row2["two"] == 1)
	                    		{
	                    			$seatBooking = $seatBooking + 1;
	                    		}
	                    		if($row2["three"] == 1)
	                    		{
	                    			$seatBooking = $seatBooking + 1;
	                    		}
	                    		if($row2["four"] == 1)
	                    		{
	                    			$seatBooking = $seatBooking + 1;
	                    		}


	                    		if($row2["one"] == 0)
	                    		{
	                    			$seatBlank = $seatBlank + 1;
	                    		}
	                    		if($row2["two"] == 0)
	                    		{
	                    			$seatBlank = $seatBlank + 1;
	                    		}
	                    		if($row2["three"] == 0)
	                    		{
	                    			$seatBlank = $seatBlank + 1;
	                    		}
	                    		if($row2["four"] == 0)
	                    		{
	                    			$seatBlank = $seatBlank + 1;
	                    		}


	                    		$totalBook = $totalBook + $seatBooking;
	                    		$totalBlank = $totalBlank + $seatBlank;
	                    		$roomType = 4 - ($seatBooking + $seatBlank);
	                    		
	                    		echo "<h4> Seat Booking: $seatBooking </h4>";
	                    		echo "<h4> Seat Blank: $seatBlank </h4>";


	                    		if($roomType == 0)
	                    		{
	                    			echo "<h4> Room Type: Four Seat </h4>";
	                    		}
	                    		else if($roomType == 1)
	                    		{
	                    			echo "<h4> Room Type: Three Seat </h4>";
	                    		}
	                    		if($roomType == 2)
	                    		{
	                    			echo "<h4> Room Type: Two Seat </h4>";
	                    		}
	                    		if($roomType == 3)
	                    		{
	                    			echo "<h4> Room Type: Single Seat </h4>";
	                    		}

	                    		
	                    		//


	                    		echo '
	                    		</div>
	                    	    ';
	                    	}

	                    	$counter = $counter + 1;
	                    }

	                    $totalSeatNumber = $totalBook + $totalBlank;

	                    echo '

	                    	<div class="vi">
	                    		<h4>Total Number of Room: '.$counter.' </h4>
	                    		<h4>Total Number of Seat: '.$totalSeatNumber.' </h4>
	                    		<h4>Total Number of Booked Seat: '.$totalBook.' </h4>
	                    		<h4>Total Number of Blanked Seat: '.$totalBlank.' </h4>
	                    	</div>

	                    ';

	                }
	                else
	                {
	                    echo'No Room Info';
	                }

	                $conn->close();
		        ?>

	        </div>
	        <br>
	        <br>
	        <br>
	        <div class="show">
		        <h1> 1st Floor Room Info </h1>

		        <?php
		            include 'dbconnect.php';
		            $sql1 = "SELECT room FROM Floor WHERE room > 200 AND room < 300";
		            $totalBook = 0;
		            $totalBlank = 0;
		            $counter = 0;
	                $result1 = $conn->query($sql1);
	                if($result1->num_rows>0)
	                {
	                    while($row1 = $result1->fetch_assoc())
	                    {
	                        $ab = $row1["room"];
	                        echo'
	                        	<div class="cls_ntc ">
	                        
	                        		<h4> Room No: '.$row1["room"].'</h4>
	                        		
	                    		
	                    	';
	                    	$sql2 = "SELECT one, two, three, four FROM Floor WHERE room = $ab";
	                    	$result2 = $conn->query($sql2);
	                    	//echo $result2;
	                    	while($row2 = $result2->fetch_assoc())
	                    	{
		            			$seatBooking = 0;
		            			$seatBlank = 0;
		            			$roomType = 0;
	                    		//$sum = $row2["one"] + $row2["two"];
	                    		//echo $sum;
	                    		if($row2["one"] == 1)
	                    		{
	                    			$seatBooking = $seatBooking + 1;
	                    		}
	                    		if($row2["two"] == 1)
	                    		{
	                    			$seatBooking = $seatBooking + 1;
	                    		}
	                    		if($row2["three"] == 1)
	                    		{
	                    			$seatBooking = $seatBooking + 1;
	                    		}
	                    		if($row2["four"] == 1)
	                    		{
	                    			$seatBooking = $seatBooking + 1;
	                    		}


	                    		if($row2["one"] == 0)
	                    		{
	                    			$seatBlank = $seatBlank + 1;
	                    		}
	                    		if($row2["two"] == 0)
	                    		{
	                    			$seatBlank = $seatBlank + 1;
	                    		}
	                    		if($row2["three"] == 0)
	                    		{
	                    			$seatBlank = $seatBlank + 1;
	                    		}
	                    		if($row2["four"] == 0)
	                    		{
	                    			$seatBlank = $seatBlank + 1;
	                    		}


	                    		$totalBook = $totalBook + $seatBooking;
	                    		$totalBlank = $totalBlank + $seatBlank;
	                    		$roomType = 4 - ($seatBooking + $seatBlank);
	                    		
	                    		echo "<h4> Seat Booking: $seatBooking </h4>";
	                    		echo "<h4> Seat Blank: $seatBlank </h4>";


	                    		if($roomType == 0)
	                    		{
	                    			echo "<h4> Room Type: Four Seat </h4>";
	                    		}
	                    		else if($roomType == 1)
	                    		{
	                    			echo "<h4> Room Type: Three Seat </h4>";
	                    		}
	                    		if($roomType == 2)
	                    		{
	                    			echo "<h4> Room Type: Two Seat </h4>";
	                    		}
	                    		if($roomType == 3)
	                    		{
	                    			echo "<h4> Room Type: Single Seat </h4>";
	                    		}

	                    		
	                    		//


	                    		echo '
	                    		</div>
	                    	    ';
	                    	}

	                    	$counter = $counter + 1;
	                    }

	                    $totalSeatNumber = $totalBook + $totalBlank;

	                    echo '

	                    	<div class="vi">
	                    		<h4>Total Number of Room: '.$counter.' </h4>
	                    		<h4>Total Number of Seat: '.$totalSeatNumber.' </h4>
	                    		<h4>Total Number of Booked Seat: '.$totalBook.' </h4>
	                    		<h4>Total Number of Blanked Seat: '.$totalBlank.' </h4>
	                    	</div>

	                    ';

	                }
	                else
	                {
	                    echo'No Room Info';
	                }

	                $conn->close();
		        ?>

	        </div>
	        <br>
	        <br>
	        <br>
	        <div class="show">
		        <h1> 2nd Floor Room Info </h1>

		        <?php
		            include 'dbconnect.php';
		            $sql1 = "SELECT room FROM Floor WHERE room > 300 AND room < 400";
		            $totalBook = 0;
		            $totalBlank = 0;
		            $counter = 0;
	                $result1 = $conn->query($sql1);
	                if($result1->num_rows>0)
	                {
	                    while($row1 = $result1->fetch_assoc())
	                    {
	                        $ab = $row1["room"];
	                        echo'
	                        	<div class="cls_ntc ">
	                        
	                        		<h4> Room No: '.$row1["room"].'</h4>
	                        		
	                    		
	                    	';
	                    	$sql2 = "SELECT one, two, three, four FROM Floor WHERE room = $ab";
	                    	$result2 = $conn->query($sql2);
	                    	//echo $result2;
	                    	while($row2 = $result2->fetch_assoc())
	                    	{
		            			$seatBooking = 0;
		            			$seatBlank = 0;
		            			$roomType = 0;
	                    		//$sum = $row2["one"] + $row2["two"];
	                    		//echo $sum;
	                    		if($row2["one"] == 1)
	                    		{
	                    			$seatBooking = $seatBooking + 1;
	                    		}
	                    		if($row2["two"] == 1)
	                    		{
	                    			$seatBooking = $seatBooking + 1;
	                    		}
	                    		if($row2["three"] == 1)
	                    		{
	                    			$seatBooking = $seatBooking + 1;
	                    		}
	                    		if($row2["four"] == 1)
	                    		{
	                    			$seatBooking = $seatBooking + 1;
	                    		}


	                    		if($row2["one"] == 0)
	                    		{
	                    			$seatBlank = $seatBlank + 1;
	                    		}
	                    		if($row2["two"] == 0)
	                    		{
	                    			$seatBlank = $seatBlank + 1;
	                    		}
	                    		if($row2["three"] == 0)
	                    		{
	                    			$seatBlank = $seatBlank + 1;
	                    		}
	                    		if($row2["four"] == 0)
	                    		{
	                    			$seatBlank = $seatBlank + 1;
	                    		}


	                    		$totalBook = $totalBook + $seatBooking;
	                    		$totalBlank = $totalBlank + $seatBlank;
	                    		$roomType = 4 - ($seatBooking + $seatBlank);
	                    		
	                    		echo "<h4> Seat Booking: $seatBooking </h4>";
	                    		echo "<h4> Seat Blank: $seatBlank </h4>";


	                    		if($roomType == 0)
	                    		{
	                    			echo "<h4> Room Type: Four Seat </h4>";
	                    		}
	                    		else if($roomType == 1)
	                    		{
	                    			echo "<h4> Room Type: Three Seat </h4>";
	                    		}
	                    		if($roomType == 2)
	                    		{
	                    			echo "<h4> Room Type: Two Seat </h4>";
	                    		}
	                    		if($roomType == 3)
	                    		{
	                    			echo "<h4> Room Type: Single Seat </h4>";
	                    		}

	                    		
	                    		//


	                    		echo '
	                    		</div>
	                    	    ';
	                    	}

	                    	$counter = $counter + 1;
	                    }

	                    $totalSeatNumber = $totalBook + $totalBlank;

	                    echo '

	                    	<div class="vi">
	                    		<h4>Total Number of Room: '.$counter.' </h4>
	                    		<h4>Total Number of Seat: '.$totalSeatNumber.' </h4>
	                    		<h4>Total Number of Booked Seat: '.$totalBook.' </h4>
	                    		<h4>Total Number of Blanked Seat: '.$totalBlank.' </h4>
	                    	</div>

	                    ';

	                }
	                else
	                {
	                    echo'No Room Info';
	                }

	                $conn->close();
		        ?>

	        </div>
	        <br>
	        <br>
	        <br>
	        <div class="show">
		        <h1> 3rd Floor Room Info </h1>

		        <?php
		            include 'dbconnect.php';
		            $sql1 = "SELECT room FROM Floor WHERE room > 400 AND room < 500";
		            $totalBook = 0;
		            $totalBlank = 0;
		            $counter = 0;
	                $result1 = $conn->query($sql1);
	                if($result1->num_rows>0)
	                {
	                    while($row1 = $result1->fetch_assoc())
	                    {
	                        $ab = $row1["room"];
	                        echo'
	                        	<div class="cls_ntc ">
	                        
	                        		<h4> Room No: '.$row1["room"].'</h4>
	                        		
	                    		
	                    	';
	                    	$sql2 = "SELECT one, two, three, four FROM Floor WHERE room = $ab";
	                    	$result2 = $conn->query($sql2);
	                    	//echo $result2;
	                    	while($row2 = $result2->fetch_assoc())
	                    	{
		            			$seatBooking = 0;
		            			$seatBlank = 0;
		            			$roomType = 0;
	                    		//$sum = $row2["one"] + $row2["two"];
	                    		//echo $sum;
	                    		if($row2["one"] == 1)
	                    		{
	                    			$seatBooking = $seatBooking + 1;
	                    		}
	                    		if($row2["two"] == 1)
	                    		{
	                    			$seatBooking = $seatBooking + 1;
	                    		}
	                    		if($row2["three"] == 1)
	                    		{
	                    			$seatBooking = $seatBooking + 1;
	                    		}
	                    		if($row2["four"] == 1)
	                    		{
	                    			$seatBooking = $seatBooking + 1;
	                    		}


	                    		if($row2["one"] == 0)
	                    		{
	                    			$seatBlank = $seatBlank + 1;
	                    		}
	                    		if($row2["two"] == 0)
	                    		{
	                    			$seatBlank = $seatBlank + 1;
	                    		}
	                    		if($row2["three"] == 0)
	                    		{
	                    			$seatBlank = $seatBlank + 1;
	                    		}
	                    		if($row2["four"] == 0)
	                    		{
	                    			$seatBlank = $seatBlank + 1;
	                    		}


	                    		$totalBook = $totalBook + $seatBooking;
	                    		$totalBlank = $totalBlank + $seatBlank;
	                    		$roomType = 4 - ($seatBooking + $seatBlank);
	                    		
	                    		echo "<h4> Seat Booking: $seatBooking </h4>";
	                    		echo "<h4> Seat Blank: $seatBlank </h4>";


	                    		if($roomType == 0)
	                    		{
	                    			echo "<h4> Room Type: Four Seat </h4>";
	                    		}
	                    		else if($roomType == 1)
	                    		{
	                    			echo "<h4> Room Type: Three Seat </h4>";
	                    		}
	                    		if($roomType == 2)
	                    		{
	                    			echo "<h4> Room Type: Two Seat </h4>";
	                    		}
	                    		if($roomType == 3)
	                    		{
	                    			echo "<h4> Room Type: Single Seat </h4>";
	                    		}

	                    		
	                    		//


	                    		echo '
	                    		</div>
	                    	    ';
	                    	}

	                    	$counter = $counter + 1;
	                    }

	                    $totalSeatNumber = $totalBook + $totalBlank;

	                    echo '

	                    	<div class="vi">
	                    		<h4>Total Number of Room: '.$counter.' </h4>
	                    		<h4>Total Number of Seat: '.$totalSeatNumber.' </h4>
	                    		<h4>Total Number of Booked Seat: '.$totalBook.' </h4>
	                    		<h4>Total Number of Blanked Seat: '.$totalBlank.' </h4>
	                    	</div>

	                    ';

	                }
	                else
	                {
	                    echo'No Room Info';
	                }

	                $conn->close();
		        ?>

	        </div>

        </div>
    </body>
</html>