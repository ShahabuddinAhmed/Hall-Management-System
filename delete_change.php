<?php
	if (isset($_GET["id"])) {
     $x = $_GET["id"];
     echo $x;
    include 'dbconnect.php';
     $sql = "DELETE FROM notice
			WHERE ID='$x'";
		if ($conn->query($sql) === TRUE) {
		    // echo "New record created successfully";

		    header('location:Ntctm.php');
		} else {
		    echo "Error: ". $conn->error;
		}
   }else echo "Something went to wrong try again letter";
?>