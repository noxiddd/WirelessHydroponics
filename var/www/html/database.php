
<html>
  <head>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js">
</script>
<script>

var auto_refresh = setInterval(
      function ()
      {
         $('#load_tweets').load('sensorUpdate.php').fadeIn("slow");
      }, 250); // refresh every 250 milliseconds

</script>
</head>
<?PHP

session_start();

$user_name = "";
$password = "";
$database = "hydroponics";
$server = "localhost";
//sensor data
$sensor_1=$_SESSION['sensors1'];
$sensor_2=$_SESSION['sensors2'];
$sensor_3=$_SESSION['sensors3'];
$sensor_4=$_SESSION['sensors4'];
$sensor_5=$_SESSION['sensors5'];

//sensor IDs
$sensorID1="wls1";
$sensorID2="wls2";
$sensorID3="wls3";
$sensorID4="wls4";
$sensorID5="wls5";

echo "<p>sensor1:   </p>";
echo $sensor_1;
echo "<p>sensor2:   </p>";
echo $sensor_2;
echo "<p>sensor3:   </p>";
echo $sensor_3;
echo "<p>sensor4:   </p>";
echo $sensor_4;
echo "<p>sensor5:   </p>";
echo $sensor_5;
echo "<p>   </p>";
// Create connection
$conn = new mysqli($server, $user_name, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
echo "Connected successfully";
echo $sensor_1;



function query_check($conn,$sql)
{
  if (mysqli_query($conn,$sql))
  {
     echo "<p> Records suscessfully Added</p>";

  }
else
  {

     echo "<p>error: query no exccuted</p>".mysqli_error($conn);
  }
}

$sql="DELETE FROM Sensors";

$sql="INSERT INTO Sensors (SensorID,SensorType,Value) VALUES ('$sensorID1','Water_Level','$sensor_1')";
query_check($conn,$sql);
$sql="INSERT INTO Sensors (SensorID,SensorType,Value) VALUES ('$sensorID2','Water_Level','$sensor_2')";
query_check($conn,$sql);
$sql="INSERT INTO Sensors (SensorID,SensorType,Value) VALUES ('$sensorID3','Water_Level','$sensor_3')";
query_check($conn,$sql);

$sql="INSERT INTO Sensors (SensorID,SensorType,Value) VALUES ('$sensorID4','Water_Level','$sensor_4')";
query_check($conn,$sql);

$sql="INSERT INTO Sensors (SensorID,SensorType,Value) VALUES ('$sensorID5','Water_Level','$sensor_5')";
query_check($conn,$sql);


}//end of else statement
mysqli_close($conn);
?>
<body>
<div id="load_tweets" align="center"></div>
</body>

</html>
