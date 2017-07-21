<?php

	if(TRUE){

		$Roll=$_POST['roll'];
		$Namef=$_POST['fname'];
		$Namel=$_POST['lname'];
		$Dept=$_POST['dept'];
		$Year=$_POST['year'];
		$Session=$_POST['session'];
		$Room=$_POST['room'];
		$Add=$_POST['addr'];
		$Mob=$_POST['mobile'];
		//$RoomType=$_POST['roomType'];

		include 'dbconnect.php';

		$sql = "SELECT room FROM floor WHERE room = '".$Room."' ";
		$result = $conn->query($sql);
		if($result->num_rows > 0)
		{
			$sql = "SELECT one, two, three, four FROM floor WHERE room = '".$Room."' ";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc())
			{
				$counter = 0;
				if($row["one"] == 1)
				{
					$counter = $counter + 1;
				}
				if($row["two"] == 1)
				{
					$counter = $counter + 1;
				}
				if($row["three"] == 1)
				{
					$counter = $counter + 1;
				}
				if($row["four"] == 1)
				{
					$counter = $counter + 1;
				}

				if($row["one"] == 0)
				{
					$counter = $counter + 1;
				}
				if($row["two"] == 0)
				{
					$counter = $counter + 1;
				}
				if($row["three"] == 0)
				{
					$counter = $counter + 1;
				}
				if($row["four"] == 0)
				{
					$counter = $counter + 1;
				}

				$RoomType = $counter;

			}

		}
		else
		{
			echo "This Room Number Dose not Exit";
		}


		$birthdate= date("m/d/Y", strtotime($_POST["birth"]));
		$dateObj = DateTime::createFromFormat('m/d/Y', $birthdate);
		$birthdate = $dateObj->format('Y/m/d');

		if($Roll!="" && $Namef!="" && $Namel!="" && $Dept!="" && $Year!="" && $Session!="" && $Room!="" && $Add!="" && $Mob!="" && $RoomType!="" && $birthdate!="")
		{

			$Name=$Namef." ".$Namel;

			$curDate=date("Y-m-d");

			$sql = "INSERT INTO student VALUES('$Roll','$Name','$Dept','$Year','$Session','$Room','$Add','$Mob','$RoomType','$birthdate','$birthdate','$curDate')";
			if($conn->query($sql)===TRUE)
			{
				header('location:Administration.php');
			}
			else
			{
				echo "Eoor.".$conn->error;
			}
		}
		else
		{
			echo "Please Fill All Info.";
		}
	}
	else
	{
		echo "Youu are Not Logged In.";
	}
?>