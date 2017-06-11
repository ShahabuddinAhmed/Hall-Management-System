<?php

	if(TRUE){
		$ID=$_POST['userId'];
		$Pass=$_POST['pass'];
		
		if($ID!="" && $Pass!=""){
			include 'dbconnect.php';
			$sql="SELECT * from student where ID='".$ID."' AND Pass='".$Pass."'";

			$result = $conn->query($sql);

			if($result->num_rows > 0){

				$row_array=$result->fetch_array();
				session_start();
				$_SESSION["ID"] = $row_array["ID"];
				header('location:Student.php');
			}
			else{
				echo "Error User's ID Or Password.";
			}
		}
		else{
			echo "<h1>Please Fill All Info</h1>";
		}
	}
	else{
		echo "You are Not Logged In.";
	}
	$conn->close();
?>