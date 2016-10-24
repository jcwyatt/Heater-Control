<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="heat.css">
	<title>Home Heating Control Scheduler</title>

</head>

<body>

<h1>Heater Control Settings</h1>


<?php
<h2>Your settings:</h2>

<p>Target Temp: echo $_POST["target"];

<p> On: echo $_POST["start1"] On: echo $_POST["start2"];
<p> Off: echo $_POST["end1"] Off: echo $_POST["end2"];

<h2>Overides</h2>
<p>Sleep (all off): echo $_POST["alloff"];
<p>Manual Overide:  echo $_POST["heaterOverride"];
?>

</body>
</html>
