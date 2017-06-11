<?php

	if(TRUE){
		$Desc=$_POST['about'];
		if($Desc!=""){
			include 'dbconnect.php';
			$sql="UPDATE info set About= '".$Desc."' WHERE Typ='dining'";
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