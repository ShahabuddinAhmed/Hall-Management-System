<?php

	if(TRUE){
		$ID=$_POST['abcd'];
		$Name=$_POST['t_name'];
		$Phon=$_POST['t_phon'];
		$Desc=$_POST['about'];
		echo $ID ." ".$Name." ".$Desc." ".$Phon;
		if($ID!="" && $Desc!="" && $Phon!="" && $Name!=""){
			include 'dbconnect.php';
			$sql="UPDATE staff set Name= '".$Name."',Phn='".$Phon."',About='".$Desc."' WHERE ID='".$ID."'";
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
	$conn->close();
?>