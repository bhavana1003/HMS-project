<?php 
session_start();

	include("connection.php");
	


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
                              $type = $_POST['type'];
	        $month = $_POST['month'];
	        $year= $_POST['year'];
                      $num = $_POST['num'];
	        $name = $_POST['name'];
	        $cvv= $_POST['cvv'];


		if(!empty($type))
		{
			
			$query = "insert into payment (type,month,year,num,name,cvv) values ('$type','$month','$year','$num','$name','$cvv')";

			mysqli_query($conn, $query);

			header("Location: homepage.html");
			die;
		}else
		{
			echo "Please enter valid data!";
		}
	}
?>