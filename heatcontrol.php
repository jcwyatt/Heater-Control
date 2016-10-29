<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="heat.css">
	<title>Home Heating Control Scheduler</title>

</head>

<body>

<div class="mainsection">

<h1>Heater Control Settings</h1>


<?php
/*read file of stored parameters*/
$storeddata = file_get_contents('heatingdata.txt');
/*attach parameters to variables*/
list ($target,$start1,$end1,$start2,$end2,$alloff,$heaterOverride) = explode(",",$storeddata);

echo $target; 
?>



<form method="POST" action="hc.php">

		<div class="contentitem">All off <br>(overrides all other settings):</div>
				<div class="contentitem"><select name="alloff">
	  		<option value="No">No</option>
	  		<option value="Yes">Yes</option>
	  	</select></div>
	
<br>	
		<div class="contentitem">On Time (1):</div>
		<div class="contentitem"><input type="time" name="start1" value="08:00"></div>
		<div class="contentitem">Off Time (1)</div>
		<div class="contentitem"><input type="time" name="end1" value="10:00"></div>
		<div class="contentitem">On Time (2):</div>
		<div class="contentitem"><input type="time" name="start2" value="18:00"></div>
		<div class="contentitem">Off Time (2)</div>
		<div class="contentitem"><input type="time" name="end2" value="22:00"></div>
	


	<div class="contentitem">Instant Manual Override:</div>
	<div class="contentitem"><select name="heaterOverride">
	  		<option value="none">None</option>
	  		<option value="off">off now</option>
	  		<option value="on">on now (1 hour)</option>
	</select></div>



	<div class="contentitem">Target Temperature:</div>
	<div class="contentitem"><input type="number" name="target" value="<?=$target?>"></div>

	<div class="contentitem">Current Temperature:</div>
	<div class="contentitem">Insert Temp Here 17deg</div>
	<div class="contentitem"><input type="submit" value="Done"></div>


</form>

</div>
</body>
</html>
