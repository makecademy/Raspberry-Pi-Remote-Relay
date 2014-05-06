<?php

	exec("sudo gpio -g mode 4 out");
	$state = $_GET["state"];
	  
	if ($state == "on"){
		exec("sudo gpio -g write 4 1");
	}
	if ($state == "off"){
		exec("sudo gpio -g write 4 0");
	}
	
?>