<?php

	if(TRUE){
		$ID=$_POST['abc'];
		$Name=$_POST['t_name'];
		$Desc=$_POST['about'];
		echo $ID ." ".$Name." ".$Desc;
		if($ID!="" && $Desc!="" &&  $Name!=""){
			include 'dbconnect.php';
			$sql="UPDATE tutor set Name= '".$Name."', About='".$Desc."' WHERE ID='".$ID."'";
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