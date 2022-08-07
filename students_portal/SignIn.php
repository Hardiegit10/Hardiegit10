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
   <body style="background-color:bla;">

  <div class="section" id="our-clients">
                      
					 	 <div class="row">

                        <div class="col-md-12">
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
	  <li><a href="Reg.php">Register&nbsp;&nbsp;&nbsp;</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><!--end header-->
</div>
</div>					
</br>
</br>

					 <div class="row">
					
</br>
</br>
                        <div class="col-md-4 col-md-offset-4" style="background-color:blue;">
                            
                            <form action="mysignin.php" method="POST" style="border:5px;">
<table style="align:center;">
</br>
 <center><h1 class="style2" style="color:white;">LookUp Tool</h1></center>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size:20px; color:white; text-align:center;">Researcher Aggregator Account</label>
</br>
</p>
</br>
<legend style="border-color:red;">
<summary style="color:white;"> Sign In </summary>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;<input type=text name="un" size=30 placeholder="Enter your username" required>
</br>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;<input type=password name="pa" size=30 placeholder=" Enter your Password" required>
</br>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit value="Sign In" class="btn btn-primary btn-block">
</legend>
</br>
</br>
<p style="color:white" >
&nbsp;&nbsp;Not yet a member? <label ><a href="Reg.php" style="color:white" >Sign Up</a> </label>
</p>
</table>
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
                    </div>
					
					<!--end footer-->
					
					</div>

</body>
</html>