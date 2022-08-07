<?php
session_start();
//include "connect.php";
//include "myreg.php";

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
	   <li><a href="SignIn.php">Search</a></li>
	    <li><a href="SignIn.php">Scholar</a></li>
	  <li><a href="Reg.php">Register&nbsp;&nbsp;&nbsp;</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><!--end header-->
					
					<!--end header-->
					</br>
		
</br>					
</br>		
</br>					
</br>

					 <div class="row">

                        <div class="col-md-10 col-md-offset-1" style="background-color:blue;">
						 
                            
                            <form action="scholarreg.php" method="POST">
<fieldset>
<legend  class='style2' style="color:white; font-size:20px; text-align:center;"> Scholar Registration </legend>
<br/>
<br/>
<br/>

  
 <p><span style="color:white;"> FirstName :&nbsp;&nbsp;</span><input type=text name="py" placeholder="Enter Scholar first name" size="50" required>

 </p>
 <br/>
 
 <p><span style="color:white;"> LastName :&nbsp;&nbsp;</span><input type=text name="lst" placeholder="Enter Scholar last name" size="50" required>

 </p>
 <br/>
 
 <p><span style="color:white;"> University :&nbsp;&nbsp;</span><input type=text name="mn" placeholder="Enter Scholar University " size="50" required>
 
 </p>
 </br>
 
  <p>
<span style="color:white;">  Gender :&nbsp;&nbsp;</span><select name="gd" style="width:400px;">
<option>I am .....
<option value="Male">Male
<option value="Female">Female
</select>
 </p>
 </br>
 
  <p><span style="color:white;"> Country :&nbsp;&nbsp;</span><input type=text name="co" placeholder="Enter Scholar Country" size="50" required>
 
 </p>
 </br>
  
 <p>
 
 <br/>
  <input type="Submit" name="ms" value="SUBMIT" style="width:200px; background-color:pink;">
 <p>

 </fieldset>
 </form>


 

    </div>
    	</div>
					
					
					
</br>



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