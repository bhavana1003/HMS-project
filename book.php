<?php 
session_start();

	include("connection.php");
	


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
                              $name = $_POST['name'];
	        $email = $_POST['email'];
	        $mobile= $_POST['mobile'];
                      $checkin = $_POST['checkin'];
	        $checkout = $_POST['checkout'];
	        $room= $_POST['room'];
                        $type= $_POST['type'];
echo"console.log($checkin,$checkout)";

		if(!empty($type))
		{
			
			$query = "insert into book (name,email,mobile,checkin,checkout,room,type) values ('$name','$email','$mobile','$checkin','$checkout','$room','$type')";

			mysqli_query($conn, $query);

			header("Location: homepage.html");
			die;
		}else
		{
			echo "Please enter valid data!";
		}
	}
?>