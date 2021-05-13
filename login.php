<?php 
session_start();

	include("connection.php");
	


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
                              $rnumber = $_POST['rnumber'];
	        $rid = $_POST['rid'];
	        $cancel= $_POST['cancel'];


		if(!empty($rnumber))
		{
			
			$query = "insert into login (rnumber,rid,cancel) values ('$rnumber','$rid','$cancel')";

			mysqli_query($conn, $query);

			header("Location: homepage.html");
			die;
		}else
		{
			echo "Please enter valid data!";
		}
	}
?>