window.onload = function(){
	buttonOn = document.getElementById('submitOn');
	buttonOn.onClick = relayOn;
	
	buttonOff = document.getElementById('submitOff');
	buttonOff.onClick = relayOff;
}

function relayOn(){
	
	hidden = document.getElementById("total");
	hidden.value = "on";
	
	form = document.getElementById("relay");
	form.method = "GET";
	form.action = "remote_relay.php";
	form.submit();
}

function relayOff(){
	
	hidden = document.getElementById("total");
	hidden.value = "off";
	
	form = document.getElementById("relay");
	form.method = "GET";
	form.action = "remote_relay.php";
	form.submit();
}


















































