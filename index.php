<!DOCTYPE html>
<html>

<?php
if (isset($_GET['show'])) $show = $_GET['show'];
else $show = home;
?>

<head>
<meta charset="utf-8">
<title>Patrix Discord Bot Overview</title>
<meta description="">
<link href="central.css">
<style>
a {
text-decoration: none;
color: black;
}
</style>
</head>

<body>
  <div id="wrapper">
  <div id="head">
    <h1><u>Patrix Discord Bot Info</u></h1>
    <p id="slogan">learning by doing</p>
  </div>

  <div id="navi">
    <?php include("navigation.php");?>
  </div>

  <div id="text">
    <br>
    <?php include("$show.php");?>
  </div>

  <div id="foot">
    <address>
      Discord: Patrix#4103
    </address>
  </div>
</div>
</body>
</html>
