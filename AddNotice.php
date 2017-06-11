<?php

	if(TRUE){
		$Desc=$_POST['about'];
		if($Desc!=""){
			include 'dbconnect.php';
			$curDate=date("Y-m-d");
			$sql="INSERT INTO notice VALUES('','$Desc','$curDate')";
			if($conn->query($sql)===TRUE){
				header('location:Administration.php');
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
	$conn->close();
?>