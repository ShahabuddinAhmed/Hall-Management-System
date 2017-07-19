<?php

	$ID=$_POST["id"];
	$Pass=$_POST["pass"];
	if($ID!="" && $Pass!="" && $ID=="admin" && $ID==$Pass){
		session_start();
		$_SESSION["ID"] = 'admin';
		header('location:Administration.php');
	}else{
		echo "<h1>Please Fill All Info Correctly</h1>";
	}
?>