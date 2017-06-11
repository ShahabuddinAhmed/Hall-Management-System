<?php

	if(TRUE){
		$ID=$_POST['abc'];
		$Name=$_POST['t_name'];
		$Phon=$_POST['t_phon'];
		echo $ID." ".$Name." ".$Phon;
		if($ID!="" && $Phon!="" && $Name!=""){
			include 'dbconnect.php';
			$sql="UPDATE contact SET Name='".$Name."',Phn='".$Phon."' WHERE ID=".$ID;
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
?>