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
	  <li><a href="Reg.php">Register &nbsp;&nbsp;&nbsp;</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</div>
</div>
<!--end header-->
					
					
					 <div class="row">

                        <div class="col-md-9">
                            
                                <div class="block-title">
								</br>
								</br>
                                   <h1 style="text-align:center; color:blue;"><b>Create your Researcher Aggregator Account</b></h1>
                                </div><!--end title -->

                        </div>
						 <div class="col-md-3">
                            
                                <div class="block-title">
								</br>
								</br>
								</br>
                                 <b> <h4><span style="color:blue;">Already a Member</span> &nbsp;&nbsp;
<a href="SignIn.php" style="color:blue;"">Sign In</a></h4></b>   
                                <!--end title -->

                        </div>
						
						</div>
						
                    </div><!--end body 1-->
					
					
					<div class="row" style="height:;">

                        <div class="col-md-5 col-md-offset-1" style="background-image:url('img1.jpg'); height:750px;">
                            
                                <div class="block-title">
                                  
                                </div><!--end title -->

                        </div>
						 <div class="col-md-4 col-md-offset-1" style="background-color:blue;"> 
                            
                                <div class="block-title">
                               
<form action="myreg.php" method="POST">
<table>
</br>
 <center><h1 class="style2" style="color:white;">Registration</h1></center>

&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size:20px; color:white; ">Full Name</label>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;<input type=text size=22 placeholder="first name" name="f" required>&nbsp;&nbsp;<input type=text size=22 name="l" placeholder="last name" required>
</br>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size:20px; color:white; ">Choose your username</label>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;<input type=text size=50 name="u" placeholder=" Enter you username" required>
</br>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size:20px; color:white; ">Create a password</label>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;<input type=password size=50 name="p" placeholder=" " required>
</br>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size:20px; color:white; ">Confirm your password</label>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;<input type=password size=50 name="pp" placeholder=" " required>
</br>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size:20px; color:white; ">Birthday</label>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;<select name="m">
<option >Month
<option value="January">January
<option value="February">February
<option value="March">March
<option value="April">April
<option value="May">May
<option value="June">June
<option value="July">July
<option value="August">August
<option value="September">September
<option value="October">October
<option value="November">November
<option value="December">December
</select>
&nbsp;&nbsp;<input type=text name="day" size=15 placeholder="Day">&nbsp;&nbsp;<input type=text name="y" size=15 placeholder="Year" required>

</br>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size:20px; color:white; " disabled>Gender</label>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;<select name="g" style="width:390px;">
<option>I am .....
<option value="Male">Male
<option value="Female">Female
</select>

</br>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size:20px; color:white; ">Mobile phone</label>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;<input type=text size=50 name="ph" placeholder="Enter your phone number " required>
</br>

&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size:20px; color:white; ">Your current E-mail</label>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;<input type=text size=50 name="mail" placeholder="Enter your email " required>
</br>
</br>
<input type=submit value="Register" class="btn btn-primary btn-block">

</table>
</form>

                        </div>
						
						</div>
						
                    </div><!--end body 2-->
					
					</br>
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
					
					
					
					</div>
					
				
					
					</body>
					</html>
