<?php
	
	$one=$_POST["one"];
	$two=$_POST["two"];
	$three=$_POST["three"];
	$four=$_POST["four"];
	include 'dbconnect.php';
		

	if($one!="")
	{
		$sql = "INSERT INTO Floor VALUES('$one', '0', '2', '2', '2')";
		if($conn->query($sql)===TRUE)
		{
			header('location:Administration.php');
		}
		else
		{
			echo $conn->error;
		}
	}


	if($two!="")
	{
		$sql = "INSERT INTO Floor VALUES('$two', '0', '0', '2', '2')";
		if($conn->query($sql)===TRUE)
		{
			header('location:Administration.php');
		}
		else
		{
			echo $conn->error;
		}
	}


	if($three!="")
	{
		$sql = "INSERT INTO Floor VALUES('$three', '0', '0', '0', '2')";
		if($conn->query($sql)===TRUE)
		{
			header('location:Administration.php');
		}
		else
		{
			echo $conn->error;
		}
	}


	if($four!="")
	{
		$sql = "INSERT INTO Floor VALUES('$four', '0', '0', '0', '0')";
		if($conn->query($sql)===TRUE)
		{
			header('location:Administration.php');
		}
		else
		{
			echo $conn->error;
		}
	}

?>