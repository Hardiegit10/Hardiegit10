<?php
session_start();
//include "connect.php";
//include "myreg.php";
 include "connect.php";
 
 
 $x=$_POST["res"];
 
   $db = mysql_connect("localhost", "root", "", "Scholar"); 
 mysql_select_db("scholar",$db); 

 
   $result2 = mysql_query("SELECT * FROM RegScholar where ID='$x'",$db);
 
 
 
 $sql="select * from RegScholar where ID='$x'";
  $result=$conn->query($sql);


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
 <input type="radio" name="m" value=""><span style="color:white;">LinkedIn</span>&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="radio" name="m" value=""><span style="color:white;">Research Gate</span>&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="radio" name="m" value=""><span style="color:white;">Google Scholar</span>&nbsp;&nbsp;&nbsp;&nbsp;
 <input type="radio" name="m" value=""><span style="color:white;">ORCID</span>
 </p>
 </span>
 <br/>
 <br/>
 </fieldset>
 </form>
 <?php
    
	echo "<TABLE border=2 width=1100px>";
	echo "<TR><TD ><B> First Name </B><TD><B> Last Name </B><TD><B> University </B><TD><B>OrcID</B></TR>"; 
	while( $myrow = mysql_fetch_array($result2))
{
			echo "<TR><TD>"; 
			echo $myrow["Fname"];
			echo "<TD>";
	echo " "; echo $myrow["Lname"];
	echo "<TD>";
	echo $myrow["Gender"]; 
	echo "<TD>"; 
	echo $myrow["Orcid"];
	echo "</TR>";
	
	} 
	echo "</TABLE>";
	
 
 
?>


</br> 

    </div>
    	</div>
					
					
					
</br>
</br>
<br/>



					<div class="row" div style="height:57px; background-color:black;">

                        <div class="col-md-12">
                            
                                <div class="block-title">
								</br>
                                    <p class="styl" style="text-align:center; color:white;">Alex © 2018. All Right Reserved.
									</p>
                                </div><!--end title -->

                        </div>
                    </div><!--end footer-->
					
					</div>

</body>
</html>