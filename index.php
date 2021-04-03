<?php 
include("connection.php");
error_reporting(0);
?>
<html>
<head>
<title>
SURVEY FORM
</title>
<style>
body{
color:white;
font-family: verdana, sans-sherif;
text-shadow: 1px 1px lightgray;
background-image: url("https://htmlcolorcodes.com/assets/images/html-color-codes-color-tutorials.jpg");
}
table{
border: 3px solid white;
padding : 60px;
font-size: 25px;
margin : 30px 70px;
line-width: 20px;
}
td{
height: 40px;
width: 250px;
vertical-align: top;
}
input[type=submit]{
vertical-align: center;
margin-left: 300px;
padding: 5px 8px;
font-size :18px;
background-color :yellow;
color:black;
border-radius :12px;
}
a{
padding: 10px 8px;
margin: 100px 40px;
color:black;
font-size:20px;
background-color :yellow;
border: 2px solid white;
border-radius :12px;
}
input{
height: 25px;
}
</style>
</head>
<body>
<center>
<a>FORM</a>
<a href="div.php">STATISTICS</a>
<table border="0">
<form method="post">
<tr>
<td>NAME</td>
<td>: <input type="text" placeholder="NAME" name="name"></td>
</tr>
<br>
<tr>
<td>PHONE NUMBER</td>
<td>: <input type="text" placeholder="10-DIGIT NUMBER" maxlength="10" name="phone_number"></td>
</tr>
</br>
<tr>
<td>ROUTE</td>
<td>: <select type="dropdown" placeholder="CHOOSE YOUR ROUTE" name="route">
<option value="between A and B">between A and B</option>
<option value="between C and B">between C and B</option>
<option value="between A and C">between A and C</option>
<option value="between B and D">between B and D</option>
<option value="between A and D">between A and D</option>
</select>
</td>
</tr>
<br>
<tr>
<td>TIMINGS</td>
<td>: <input type="checkbox" name="tim[]"><label>5 AM - 6AM</label></br>
 <input type="checkbox" name="tim[]" value="6 AM - 7 AM"><label>6 AM - 7 AM</label></br>
 <input type="checkbox" name="tim[]" value="7 AM - 8 AM"><label>7 AM - 8 AM</label></br>
 <input type="checkbox" name="tim[]" value="8 AM - 9 AM"><label>8 AM - 9 AM</label></br>
 <input type="checkbox" name="tim[]" value="9 AM - 10 AM"><label>9 AM - 10 AM</label></br>
 <input type="checkbox" name="tim[]" value="10 AM - 11 AM"><label>10 AM - 11 AM</label></br>
 <input type="checkbox" name="tim[]" value="11 AM - 12 AM"><label>11 AM - 12 AM</label></br>
 <input type="checkbox" name="tim[]" value="12 PM - 1 PM"><label>12 PM - 1 PM</label></br>
 <input type="checkbox" name="tim[]" value="1 PM - 2 PM"><label>1 PM - 2 PM</label></br>
 <input type="checkbox" name="tim[]" value="2 PM - 3 PM"><label>2 PM - 3 PM</label></br>
 <input type="checkbox" name="tim[]" value="3 PM - 4 PM"><label>3 PM - 4 PM</label></br>
 <input type="checkbox" name="tim[]" value="4 PM - 5 PM"><label>4 PM - 5 PM</label></br>
 <input type="checkbox" name="tim[]" value="5 PM - 6 PM"><label>5 PM - 6 PM</label></br>
 <input type="checkbox" name="tim[]" value="6 PM - 7 PM"><label>6 PM - 7 PM</label></br>
 <input type="checkbox" name="tim[]" value="7 PM - 8 PM"><label>7 PM - 8 PM</label></br>
 <input type="checkbox" name="tim[]" value="8 PM - 9 PM"><label>8 PM - 9 PM</label></br>
 <input type="checkbox" name="tim[]" value="9 PM - 10 PM"><label>9 PM - 10 PM</label></br>
 <input type="checkbox" name="tim[]" value="10 PM - 11 PM"><label>10 PM - 11 PM</label></br>
</td>
</tr>
<td></td>
<td></td></tr>
</tr>
<td></td>
<td><input type="submit" value="submit" name="submit"></td></tr>
</form>
</table>
</center>
</body>
</html>
<?php 
if(isset($_POST["submit"]))
{
$nm=$_POST['name']; 
$ph=$_POST['phone_number'];
$rt=$_POST['route'];
$chkbox=$_POST['tim'];
$chk="";
foreach($chkbox as $chkboxresult)
{
$chk.=$chkboxresult.",";
}
$query="INSERT INTO feedback VALUES('$nm','$ph','$rt','$chk')";
$data=mysqli_query($conn,$query);
}
?>    
