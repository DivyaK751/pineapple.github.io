
<?php 
error_reporting(0);

$dataPoints = array( 
	array("y" => 5,"label" => "between A and B" ),

	array("y" => 3,"label" => "between C and B" ),
	array("y" => 1,"label" => "between A and C" ),
	array("y" => 4,"label" => "between B and D" ),
        array("y" => 2,"label" => "between A and D" )
);

?>

<!DOCTYPE HTML>
<html>
<style>
a{
padding: 10px 8px;
margin: 100px 40px;
color:black;
font-size:20px;
background-color :yellow;
border: 2px solid white;
border-radius :12px;
}

</style>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "most used routes"
	},
	axisY: {
		title: "frequency",
		includeZero: true,
	},
	data: [{
		type: "bar",
		yValueFormatString: "##",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body style="background-image: url('https://cdn.hipwallpaper.com/i/82/65/Phx9f2.jpg');">
<br>
<center>
<a href="index.php">FORM</a>
<a>STATISTICS</a>
</center>
<div id="chartContainer" style="height: 370px; width: 100%; margin:150px 0px;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> 


<a href="three.html">QUIT</a><br><br>
</body>
</html>


<?php 

$conn=mysqli_connect('localhost','root','','transportation');
$query="select timings, count(*) from feedback group by timings";
$result = mysqli_query($conn,$query);

while($row=mysqli_fetch_array($result))
{
echo  "  ".$row["count(*)"]." people choose to travel during the interval ".$row["timings"]." <br>  ";
}
?>             