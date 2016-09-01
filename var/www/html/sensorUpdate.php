<?php
session_start();
$sensor="";
$port = fopen("/dev/ttyACM0", "r"); //You have to check which port your Arduino is connected to and change this (this one is for Ubuntu and Arduino 2009)
if(!$port)
{
    echo "<p><p>Error...did you plug in arduino?</p>"; die();   
}

else
{
$sensor=fread($port,5);
echo $sensor;
$arr=str_split($sensor);
$_SESSION['sensors1']=$arr[0];
$_SESSION['sensors2']=$arr[1];
$_SESSION['sensors3']=$arr[2];
$_SESSION['sensors4']=$arr[3];
$_SESSION['sensors5']=$arr[4];
//echo "  ";
//echo $_SESSION['sensors1'];
}
sleep(2);

?>
