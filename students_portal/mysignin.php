<?php
session_start();
 include "connect.php";
 
 $x=$_POST["un"];
 $y=$_POST["pa"];
 
 
 $sql="select * from Registration where username='$x' and pass='$y'";
 $result=$conn->query($sql);
 
 if($row=$result->fetch_assoc())
 {
	 $_SESSION['First']=$row['first'];
	 header("Location:Search.php");
 }
 else
 {
		 header("Location:Error.php"); 
 }
 
?>