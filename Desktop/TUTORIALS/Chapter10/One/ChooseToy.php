<html>
 <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <script type="text/javascript">
            function fun1()
            {
       var str1= document.getElementById("ToyName").value.toString();
                if(str1=='Select')
                {
                    alert('Please select the toy name');
                    return false;
                }

                return true;

            }
        </script>
    </head>
<body>
        <center>
            <div style="width: 750px; height:100px; background-color:cadetblue; ">
                <b><center><font style="font-family: Arial, Helvetica, sans-serif;" size="+8" color="#FFFFFF">
				GlobalToyz</font></center></b>
            </div>
        </center>
		</br>
		</br>
        <center>

<?php

echo "<form action='Retrieve2.PHP' method='POST'>";

$conn = mysql_connect('localhost','root', '');
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db('GlobalToyz',$conn);

$query = "select vToyName from toys";

$result = mysql_query($query,$conn);

$selectbox='Please select the toy name: <select name=\'ToyName\' id=\'ToyName\' position:absolute;>  
 <option value="Select">Select</option>';

while ($row = mysql_fetch_array($result)) {
 $selectbox.='<option value="' .$row['vToyName'] .'">' . $row['vToyName']. '</option>';

}

$selectbox.='</select>';

//mysql_free_result($result);

echo $selectbox;
echo "<br> <br>";
echo "<input type='Submit' name='Submit' value='Submit' onclick='return fun1()'/>";

?>
        </center>
</body>
</html>