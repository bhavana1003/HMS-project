<?php
$conn = new mysqli("localhost:3307","root","","test");
if(!$conn)
{

	echo "Connection is not successful";
}
?>