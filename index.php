<html>
<head><title>Hydroponics</title>
<link rel="shortcut icon" type="image/x-icon" href="hydro-4.png" />

<!-- Styles -->	
<style style="text/css">
body {
  background-image: url("images/Most-Beautiful-Sun-Wallpaper.jpg");
  background-position: 50% 50%;
  background-repeat: repeat;
}
</style>
<script type="javascript">
alert("you....")
</script>

</head>

<body bgcolor="#00abff">
<center>
<img src="images/hydro-3.jpg" alt="Test" WIDTH=500 HEIGHT=400>
<?php
echo "<p>WIRELESS HYDROPONICS SIGN IN</p><p>";

?>


<form action="index.php" method="post">
UserName: <input type="text" name="username">
PassWord: <input type="text" name="password">
<input type="submit" value="Enter">
</form>




<?php
$credentials=false;
$once="0";
if($_POST['username']=="Hydro" && $_POST['password']=="password")
{
 header("Location: homepage.php");//goes to homepage webpage
 $credentials=true;
 $once=1;
}
else if($_POST['username']!="Hydro" && $_POST['password']!="password" && $once=0)
{
 $once=1;
 $credentials=false;
}


if($credentials==false && $once==0)
{
  echo "INPUT CREDENTIALS";
  $once==1;
}
else if($credentials==false && $once==1)
{
  echo "INCORRECT CREDENTIALS";
}
?>



</body></html>
