<?php

	$state = $_GET["state"];
	exec("gpio -g mode 4 out");
	  
	if ($state == "on"){
		exec("gpio -g write 4 1");
	}
	if ($state == "off"){
		exec("gpio -g write 4 0");
	}
	
?>