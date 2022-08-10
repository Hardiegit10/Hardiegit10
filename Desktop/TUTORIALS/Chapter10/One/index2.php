<html>

    <head>

        <title> </title>
    </head>

    <body>

  <center>
            <div style="width: 100%; height:100px; background-color:cadetblue; ">
                <b><center>
<font style="font-family: Arial, Helvetica, sans-serif;" size="+8" color="#FFFFFF">
GlobalToyz</font></center></b>
            </div>
        </center>
		</br>
		</br>
        
<?php

$conn = mysqli_connect("localhost", "root", "", "GlobalToyz");
//echo "connected";
if (!$conn) {
    die("connection fail" . mysqli_connect_error());
}

	$sql = "select vToyName, cToyID, mToyRate, vToyDescription, siToyWeight from toys 
	WHERE vToyName='$_POST[ToyName]'";

 $result = mysqli_query($conn,$sql);


while ($row = mysqli_fetch_array($result)) {
 echo "<table border='1' align='center'><tr> <th> ToyName</th><th>ToyId</th>
 <th>ToyRate ($)</th> <th>ToyDescription</th><th>ToyWeight</th><tr><td>".$row['vToyName']. "</td><td>".$row['cToyID'].
 "</td><td>".$row['mToyRate']."</td><td>".$row['vToyDescription']."</td><td>".$row['siToyWeight']."</td></tr>" ;

}
	
?>

        </center>
</body>
</html>