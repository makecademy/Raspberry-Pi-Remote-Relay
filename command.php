<?php

	system("sudo gpio -g mode 4 out");
	$state = $_GET["state"];
	  
	if ($state == "on"){
		system("sudo gpio -g write 4 1");
	}
	if ($state == "off"){
		system("sudo gpio -g write 4 0");
	}
	
?>
