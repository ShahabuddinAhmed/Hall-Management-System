<?php

	if(TRUE){
		$ID=$_POST['slct'];
		$Desc=$_POST['about'];
		if($ID!="" && $Desc!=""){
			include 'dbconnect.php';
			$sql="UPDATE mosque set About= '".$Desc."' WHERE Name='".$ID."'";
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
		echo "You are Not Logged In.";
	}
?>