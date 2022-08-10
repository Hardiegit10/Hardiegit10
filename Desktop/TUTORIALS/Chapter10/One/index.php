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
            <div style="width: 100%; height:100px; background-color:cadetblue; ">
                <b><center>
<font style="font-family: Arial, Helvetica, sans-serif;" size="+8" color="#FFFFFF">
GlobalToyz</font></center></b>
            </div>
        </center>
		</br>
		</br>
        <center>

<?php

echo "<form action='index2.php' method='POST'>";

$conn = mysqli_connect("localhost","root", "", "GlobalToyz");
//echo "connected";

if (!$conn)
  {
  die('Could not connect : ' . mysqli_connect_error());
  }


$sql = "select vToyName from toys";


 $result = mysqli_query($conn,$sql);

$selectbox='Please select the toy name:
 <select name=\'ToyName\' id=\'ToyName\' position:absolute;> 
 <option value="Select">Select</option>';

while ($row = mysqli_fetch_array($result)) {
     $selectbox.='<option value="' . $row['vToyName'] . '">' . $row['vToyName']. 
	 '</option>';

}

$selectbox.='</select>';

//mysql_free_result($result);

echo $selectbox;
echo "<br> <br>";
echo "
<input type='Submit' name='Submit' value='Submit' onclick='return fun1()'/>";
echo "</form>";
?>