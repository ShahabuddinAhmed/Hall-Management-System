<?php
	
	$ID=$_POST["t_name"];
	$Year=$_POST["slct"];
	include 'dbconnect.php';
	$sql="UPDATE student set Year= '".$Year."' WHERE ID='".$ID."'";
	if($conn->query($sql)===TRUE){
		header('location:Administration.php');
	}else{
		echo $conn->error;
	}
?>