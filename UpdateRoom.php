<?php
	
	$Room=$_POST["t_name1"];
	$ID=$_POST["t_name2"];
	include 'dbconnect.php';
	$sql="UPDATE student set Room= '".$Room."' WHERE ID='".$ID."'";
	if($conn->query($sql)===TRUE){
		header('location:Administration.php');
	}else{
		echo $conn->error;
	}
?>