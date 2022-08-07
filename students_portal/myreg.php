<?php
session_start();
 include "connect.php";
 
 
 $a=$_POST["f"];
 $b=$_POST["l"];
 $c=$_POST["u"];
 $d=$_POST["p"];
 $e=$_POST["pp"];
 $f=$_POST["m"];
 $g=$_POST["day"];
 $h=$_POST["y"];
 $j=$_POST["g"];
 $k=$_POST["ph"];
 $l=$_POST["mail"];
 
 $w=$f."/".$g."/".$h;
 
 
 
 //echo $a."</br>";
 //echo $b."</br>";
 //echo $c."</br>";
 //echo $d."</br>";
 //echo $e;
 
 $sql="insert into Registration(first,last,username,pass,ppass,dob,gender,phone,email) values ('$a','$b','$c','$d','$e','$w','$j','$k','$l')";
 $result=$conn->query($sql);
 
 $sql2="select * from Registration where email='$l'";
 $result2=$conn->query($sql2);
 
 if($row=$result2->fetch_assoc())
 {	 
	  $_SESSION['username']=$row['username'];
	   $_SESSION['pass']=$row['pass'];
	   $_SESSION['First']=$row['first'];
 header("Location:Success.php");
 }
 
 
 
 
 header("Location:Success.php");
?>