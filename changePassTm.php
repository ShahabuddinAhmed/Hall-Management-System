<?php

	session_start();
    if(isset($_SESSION['ID']) && !empty($_SESSION['ID']) && $_SESSION["ID"]!="ADMIN"){
		$ID=$_SESSION['ID'];
		$Fpass=$_POST['fpass'];
		$Spass=$_POST['spass'];

		if($Fpass!="" && $Fpass==$Spass){
			include 'dbconnect.php';
			$sql="UPDATE student SET Pass='".$Fpass."' WHERE ID='".$ID."'";
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