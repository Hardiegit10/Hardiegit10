<?php
session_start();
$conn=mysqli_connect("localhost","root","","Scholar");
 
  $x=$_POST["res"];
 
 // $y=$_POST["t"];



?>

<html>
  <head>
<title> Alex Researcher Aggregator</title>

<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


<style>
		
@keyframes multicolor
{
0% {color:darkgreen;}
40% {color:hotpink;}
60%{color:darkgreen;}
80% {color:hotpink;}
}
@-webkit-keyframes multicolor /* Chrome */
{
0% {color:darkgeen;}
40% {color:hotpink;}
60%{color:darkgreen;}
80% {color:hotpink;}
}
.style2{
font-size:40px;
animation:multicolor 5s infinite;
-webkit-animation:multicolor 5s infinite; /*Chrome */
}

a{
display: inline;
text-decoration: none;
color:white;
}
 a:hover{ 
color: pink; 
}
	
	td
	{
		color:white;
	}
	
</style>

  </head>
  
   <body style="background-color:bl;">

  <div class="section" id="our-clients">
                      
					 
                   
                        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid row">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs" aria-expanded="false">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                    <a class="navbar-brand" href="#">Alex LookUp Tool</a>
                </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs">
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Home.php">Home</a></li>
      <li><a href="SignIn.php">Login</a></li>
	  <li><a href="Search.php">Search</a></li>
	    <li><a href="Scholar.php">Scholar</a></li>
	  <li><a href="Reg.php">Register&nbsp;&nbsp;&nbsp;</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><!--end header-->
					
					<!--end header-->
					</br>
					    <div class="row">

                        <div class="col-md-3 col-md-offset-9">
                            
                                <div class="block-title">
								</br>
								</br>
                                    <p style="float:right; color:blue;"> 
<?php
    if(isset($_SESSION['First']))
	{
		echo "Welcome: ";
		echo $_SESSION['First'];
	
	}
?>
&nbsp;&nbsp;&nbsp; 
	</br>
		<a href="signin.php?logout='1'" style="color:red;">LogOut</a>
		
		<?php
		if(isset($_POST['logout']))
		{
			session_destroy();	
		}
		?>
		
</p>
                                </div><!--end title -->

                        </div>
                    </div><!--end session-->
					
</br>
</br>




					 <div class="row">

                        <div class="col-md-10 col-md-offset-1" style="background-color:blue;">
						 <br/>
<br/>
<br/>

                            
                            <form action="Search.php" method="POST">
<fieldset>
<legend class="style2" style="color:white; font-size:20px; text-align:center;"> LookUp Tool Search </legend>
<br/>
<br/>
<br/>
 <span style="text-align:center;">
  <p><input type="text" name="res" placeholder="Type your search here Scholar ID .........." size="50" required>
 <input type="Submit" value="Search" id="k" style="background-color:black; color:white; size:30px;">
 </p>
 <br/>
 <p>
 <span style="color:white;">Search By Options :</span>
 <input type="radio" name="t" value="ID"><span style="color:white;">Scholar ID</span>&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="radio" name="t" value="University"><span style="color:white;">Scholar University</span>&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="radio" name="t" value="Country"><span style="color:white;">Scholar Country</span>&nbsp;&nbsp;&nbsp;&nbsp;
 </p>
 </span>
 
 <TABLE border=2 width=1100px>
	<TR><TD ><B> First Name </B><TD><B> Last Name </B><TD><B> University </B><TD><B>Gender</B><TD><B> Country </B></TR>
 <?php
	if(isset($_POST["t"]))
	{
	if( $_POST["t"]== "ID")
	{
		 $sql="select * from category where ID='$x'";
 
  $result=mysqli_query($conn,$sql);

	while( $myrow = mysqli_fetch_array($result))
{
			echo "<TR><TD>"; 
			echo $myrow["FN"];
			echo "<TD>";
	 echo $myrow["LN"];
	 echo "<TD>";
	 echo $myrow["University"];
	echo "<TD>";
	echo $myrow["Gender"]; 
	echo "<TD>"; 
	echo $myrow["Country"];
	echo "</TR>";
	
	} 
	
	}
    else if($_POST["t"] == "University")
	{
				 $sql="select * from category where University='$x'";
 
  $result=mysqli_query($conn,$sql);

	while( $myrow = mysqli_fetch_array($result))
{
			echo "<TR><TD>"; 
			echo $myrow["FN"];
			echo "<TD>";
	 echo $myrow["LN"];
	 echo "<TD>";
	 echo $myrow["University"];
	echo "<TD>";
	echo $myrow["Gender"]; 
	echo "<TD>"; 
	echo $myrow["Country"];
	echo "</TR>";
	
	} 
	
	}
	else if($_POST["t"] == "Country")
	{
				 $sql="select * from category where Country='$x'";
 
  $result=mysqli_query($conn,$sql);

	while( $myrow = mysqli_fetch_array($result))
{
			echo "<TR><TD>"; 
			echo $myrow["FN"];
			echo "<TD>";
	 echo $myrow["LN"];
	 echo "<TD>";
	 echo $myrow["University"];
	echo "<TD>";
	echo $myrow["Gender"]; 
	echo "<TD>"; 
	echo $myrow["Country"];
	echo "</TR>";
	
	} 

		
	}
	else
	{
		 
		}
	}
	
 
 
?>

 </fieldset>
</form>
 
</br> 

    </div>
    	</div>
					
					
					
</br>
</br>
</div>



</body>
</html>