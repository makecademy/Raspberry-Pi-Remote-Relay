<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Remote control</title>
  <script type="text/javascript" src="script.js"></script>
</head>
<body>
	
<form id="relay" action="remote_relay.php" method="GET">
    <input type="button" id="submitOn" style="border:1px solid #000; font-size:40px;" value="On" onClick="relayOn()"/>
    <input type="button" id="submitOff" style="border:1px solid #000; font-size:40px;" value="Off" onClick="relayOff()"/>
	<input type="hidden" name="total" id="total" value="">
</form>

<?php

	system("gpio -g mode 4 out");
	$state = $_GET["total"];
	  
	if ($state == "on"){
		system("gpio -g write 4 1");
	}
	if ($state == "off"){
		system("gpio -g write 4 0");
	}
	
?>

</body>
