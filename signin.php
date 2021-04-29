<?php 
session_start();
	include("connection.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
                              $username = $_POST['username'];
	        $password = $_POST['password'];
	        $signup= $_POST['signup'];


		if(!empty($password))
		{
			
			$query = "insert into signin (username,password,signup) values ('$username','$password','$signup')";

			mysqli_query($conn, $query);

			header("Location: homepage.html");
			die;
		}else
		{
			echo "Please enter valid data!";
		}
	}
?>