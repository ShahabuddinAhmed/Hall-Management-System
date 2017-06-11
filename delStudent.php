<?php
	
	$ID=$_POST["t_name"];
	include 'dbconnect.php';
	$sql="DELETE FROM student  WHERE ID='".$ID."'";
	if($conn->query($sql)===TRUE){
		header('location:Administration.php');
	}else{
		echo $conn->error;
	}
?>