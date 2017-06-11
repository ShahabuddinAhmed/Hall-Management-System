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
		$RoomType=$_POST['roomType'];

		$birthdate= date("m/d/Y", strtotime($_POST["birth"]));
		$dateObj = DateTime::createFromFormat('m/d/Y', $birthdate);
		$birthdate = $dateObj->format('Y/m/d');

		if($Roll!="" && $Namef!="" && $Namel!="" && $Dept!="" && $Year!="" && $Session!="" && $Room!="" && $Add!="" && $Mob!="" && $RoomType!="" && $birthdate!=""){
			include 'dbconnect.php';

			$sql = "SELECT COUNT(*)as total FROM student WHERE Room=".$Room;
			$result = $conn->query($sql);
			if($result->num_rows > 0)
			{
				$row_array=$result->fetch_array();
				$tm=$row_array['total'];
				if($tm<$RoomType){
					$Name=$Namef." ".$Namel;

					$curDate=date("Y-m-d");
					
					$sql = "INSERT INTO student VALUES('$Roll','$Name','$Dept','$Year','$Session','$Room','$Add','$Mob','$RoomType','$birthdate','$birthdate','$curDate')";
					if($conn->query($sql)===TRUE){
						header('location:Administration.php');
					}
					else{
						echo "Eoor.".$conn->error;
					}
				}
				else{
					echo "The Room Already Full";
				}
			}
			else{
				echo "Error=".$conn->error;
			}

	}
	else{
		echo "Please Fill All Info.";
	}
}
	else{
		echo "Youu are Not Logged In.";
	}
?>