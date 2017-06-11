<?php

	session_start();
    if(isset($_SESSION['ID']) && !empty($_SESSION['ID'])){
    	
		$ID=$_SESSION['ID'];
		$Desc=$_POST['about'];

		if($Desc!=""){
			include 'dbconnect.php';
			$sql="INSERT INTO complain (StuID,Complain)  VALUES('$ID','$Desc')";
			if($conn->query($sql)===TRUE){
				header('location:Student.php');
			}
			else{
				echo "Eoor.".$conn->error;
			}
		}
		else{
			echo "<h1>Please Fill All Info</h1>";
		}
	}
	else{
		echo "Youu are Not Logged In.";
	}
?>