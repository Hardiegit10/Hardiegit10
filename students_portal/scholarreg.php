<?php
session_start();
 include "connect.php";
 
 
 $a=$_POST["py"];
 $b=$_POST["lst"];
 $c=$_POST["mn"];
 $d=$_POST["gd"];
 $e=$_POST["co"];

 
 $sql="insert into category(FN,LN,University,Gender,Country) values ('$a','$b','$c','$d','$e')";
 $result=$conn->query($sql);
 
 
 $sql2="select * from category where LN='$b'";
 $result2=$conn->query($sql2);
 
 if($row=$result2->fetch_assoc())
 {	 
	  $_SESSION['ID']=$row['ID'];
 header("Location:ScholarSuccess.php");
 }
 
?>