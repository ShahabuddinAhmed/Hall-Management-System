<?php

	if(TRUE){
		$ID=$_POST["ID"];
		$Year=$_POST["Year"];
		if(!empty($_POST['chk']) && $ID!="" && $Year!=""){

				include 'dbconnect.php';

				$sql="SELECT * FROM student WHERE ID='".$ID."'";
				$result = $conn->query($sql);

				if($result->num_rows > 0){

					$sql="SELECT COUNT(*) as total FROM payment";
					$result = $conn->query($sql);
					$row=$result->fetch_array();
					$lastID=$row["total"]+1;

					$sql="SELECT * FROM payment WHERE Roll='".$ID."' AND Yer='".$Year."'";
					$result = $conn->query($sql);

					if($result->num_rows > 0){
						$row=$result->fetch_array();
						 $lastID=$row["ID"];
					}
					else{
						$sql="INSERT INTO payment(ID,Roll,Yer) VALUES('$lastID','$ID','$Year')";
						$conn->query($sql);
						echo "INSERT=".$conn->error;
					}

					foreach($_POST['chk'] as $check) {
				    	$sql="UPDATE payment SET ".$check."='Paid' WHERE ID='".$lastID."'";
						$conn->query($sql);
						
				    }
				    
				    header('location:Administration.php');
				    
				}
				else{
					echo "This ID Is Not Valid.";
				}
			}
			else{
				echo "Please Fill all Info";
			}
	}
	else{
		echo "You are Not Logged In.";
	}
?>