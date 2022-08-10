<html>
<body>
  <center>
            <div style="width: 750px; height:100px; background-color:cadetblue; ">
                <b><center>
<font style="font-family: Arial, Helvetica, sans-serif;" size="+8" color="#FFFFFF">
				GlobalToyz</font>
				</center></b>
            </div>
        </center>
        <center>
            <br><br>

<?php

$conn = mysql_connect('localhost','root', 'rola26');
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db('GlobalToyz',$conn);

$query = "select vToyName, cToyID, mToyRate from toys 
WHERE vToyName='Robby the Whale '";


 $result = mysql_query($query,$conn);


while ($row = mysql_fetch_array($result)) {
 echo "<table border='1' align='center'><tr> <th> ToyName</th>
 <th>ToyId</th><th>ToyRate ($)</th>
 <tr><td>".$row['vToyName']."</td><td>".$row['cToyID']."</td><td>".$row['mToyRate']."</td></tr>" ;


}

?>
        </center>
</body>
</html>