<html>

<head>
<link rel="shortcut icon" type="image/x-icon" href="hydro-4.png" />
<title>Hydroponics</title>

<!-- Styles -->	
<style style="text/css">
body {
  background-image: url("images/sun-space-hd-wallpaper.jpg");
  background-position: 50% 50%;
  background-repeat: repeat;
  
}
</style>
</head>

<body bgcolor="#000000" text="green">

<center>
<img src="images/hydro.jpg" alt="Test" WIDTH=500 HEIGHT=400>
<?php
echo "<p>WIRELESS HYDROPONICS HOME</p><p>";

$port = fopen("/dev/ttyACM0", "w"); //You have to check which port your Arduino is connected to and change this (this one is for Ubuntu and Arduino 2009)
if(!$port)
{
    echo "<p><p>Error...did you plug in arduino?"; die();   
}
sleep(2);
$once=7;
?>

</center>

<style type="text/css">
    .inline {
        display: inline-block;
    }
</style>



<div>

<?php

// Turn Valve ON 
echo "Valve 1 (pin 12):" 
?>

<form class="inline" action="homepage.php" method="POST">

<input type="hidden" name="turn" value="on1" />

<input type="Submit" value="on">

</form>

<?php

// Turn Valve OFF ?>

<form class="inline" action="homepage.php" method="POST">

<input type="hidden" name="turn" value="off1" />

<input type="Submit" value="off">

</form>
</div>





<div>

<?php
// Turn Valve ON 
echo "Valve 2 (pin 11):" 
?>

<form class="inline" action="homepage.php" method="POST">

<input type="hidden" name="turn2" value="on2" />

<input type="Submit" value="on">

</form>

<?php

// Turn Valve OFF ?>

<form class="inline" action="homepage.php" method="POST">

<input type="hidden" name="turn2" value="off2" />

<input type="Submit" value="off">

</form>
</div>
<div>
<?php
// Turn Valve ON 
echo "Valve 3 (pin 10):" 
?>

<form class="inline" action="homepage.php" method="POST">

<input type="hidden" name="turn3" value="on3" />

<input type="Submit" value="on">

</form>

<?php

// Turn Valve OFF ?>

<form class="inline" action="homepage.php" method="POST">

<input type="hidden" name="turn3" value="off3" />

<input type="Submit" value="off">

</form>

</div>


<div>
<?php
// Turn Valve ON
echo "Valve 4 (pin 9)  :"  
 ?>

<form class="inline" action="homepage.php" method="POST">

<input type="hidden" name="turn4" value="on4" />

<input type="Submit" value="on">

</form>

<?php

// Turn Valve OFF ?>

<form class="inline" action="homepage.php" method="POST">

<input type="hidden" name="turn4" value="off4" />

<input type="Submit" value="off">

</form>

</div>



<div>
<?php
// Turn Valve ON 
echo "Pump (pin 8): "
?>

<form class="inline" action="homepage.php" method="POST">

<input type="hidden" name="pump_water" value="on_water" />

<input type="Submit" value="on">

</form>

<?php

// Turn Valve OFF ?>

<form class="inline" action="homepage.php" method="POST">

<input type="hidden" name="pump_water" value="off_water" />

<input type="Submit" value="off">

</form>

</div>




<form class="inline" action="homepage.php" method="POST">

<input type="hidden" name="vid" value="vidz" />

<input type="Submit" value="Play Video">

</form>


<form class="inline" action="homepage.php" method="POST">

<input type="hidden" name="Test" value="rwtest" />

<input type="Submit" value="tests">

</form>


<?php
//////++++++++++++first valve operations
if ($_POST['turn']=="on1"){

echo "<p>Valve 1 on";

fwrite($port, "n");
//sleep(10);
}
else if($_POST['turn']=="off1")

{

echo "<p>Valve 1 off";

fwrite($port, "f");
//sleep(10);
}


//////+++++++++++++++++second valve operations
if ($_POST['turn2']=="on2"){

echo "<p>Valve 2 on";

fwrite($port, "a");
//sleep(10);
}
else if($_POST['turn2']=="off2")

{

echo "<p>Valve 2 off";

fwrite($port, "b");
//sleep(10);
}

//////+++++++++++++++++third valve operations
if ($_POST['turn3']=="on3"){

echo "<p>Valve 3 on";

fwrite($port, "c");
//sleep(10);
}
else if($_POST['turn3']=="off3")

{

echo "<p>Valve 3 off";

fwrite($port, "d");
//sleep(10);
}


//////+++++++++++++++++fourth valve operations
if ($_POST['turn4']=="on4"){

echo "<p>Valve 4 on";

fwrite($port, "e");
//sleep(10);
}
else if($_POST['turn4']=="off4")

{

echo "<p>Valve 4 off";

fwrite($port, "g");
//sleep(10);
}

//////+++++++++++++++++Water Pump operations
if ($_POST['pump_water']=="on_water"){

echo "<p>Water pump on";

fwrite($port, "h");
//sleep(10);
}
else if($_POST['pump_water']=="off_water")

{

echo "<p>Water pump off";

fwrite($port, "i");
//sleep(10);
}


echo fread($port,10);

echo "<p>3";

fclose($port);

if($_POST['vid']=="vidz")
{
header("Location: video.php");
//<embed src="localstream1234.asx" height="370" width="400">
}

if($_POST['Test']=="rwtest")
{
header("Location: pyhton_test.php");}
?>


</body>


</html>
