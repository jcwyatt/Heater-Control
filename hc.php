<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="heat.css">
	<title>Home Heating Control Scheduler</title>

</head>

<body>

<<<<<<< HEAD
<div class="mainsection">

<h1>Heater Control Settings</h1>



<h2>Your settings:</h2>

Target Temp: <div class="echodata"> <?php echo $_POST["target"]; ?></div>

On: <div class="echodata"> <?php echo $_POST["start1"]; ?></div> 
Off:<div class="echodata"><?php echo $_POST["end1"]; ?> </div> 
On: <div class="echodata"><?php echo $_POST["start2"]; ?></div>
Off: <div class="echodata"><?php echo $_POST["end2"]; ?></div>

<h2>Overides</h2>

Sleep (all off): <div class="echodata"><?php echo $_POST["alloff"]; ?></div>
Manual Overide:  <div class="echodata"><?php echo $_POST["heaterOverride"]; ?></div>

</div>

<?php
	$heatingdata = array($_POST["target"],$_POST["start1"],$_POST["end1"],$_POST["start2"],$_POST["end2"],$_POST["alloff"],$_POST["heaterOverride"]);
	
	$file = fopen("heatingdata.txt","w");
	fputcsv($file, $heatingdata);
	fclose($file);

 
?>
=======
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

>>>>>>> 31020229e0918200f0bedb3f32ad1ed7368a15f4
</body>
</html>
