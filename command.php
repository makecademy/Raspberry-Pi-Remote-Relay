<?php

	$state = $_GET["state"];
	  
	if ($state == "on"){
		exec("sudo python on.py");
	}
	if ($state == "off"){
		exec("sudo python off.py");
	}
	
?>