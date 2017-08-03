<?php
	include 'dbconnect.php';
	session_start();
	$ID="ab".$_SESSION['ID'];
	$sql = "SELECT $ID FROM meal";
	if($conn->query($sql)==TRUE)
	{
		echo "<h2> You are already Created a meal account </h2>";
	}
	else
	{
		$sql = "ALTER TABLE meal ADD ".$ID. " int  DEFAULT 0";

		if($conn->query($sql)==TRUE)
		{
			$sql = "INSERT INTO account VALUES('$ID', '0')";
			if($conn->query($sql)==TRUE)
			{
				header('location:Student.php');
			}
			else
			{
				echo $conn->error;
			}
		}
		else
		{
			echo $conn->error;
		}
	}

?>