<?php
	$conn=mysqli_connect("localhost","root","","Scholar");
	//echo "connected";
	if(!$conn)
	{
		die("connection fail".mysqli_connect_error());
	}
	
	
	//mysql_select_db("ola");
	//echo "conect db";
?>