<?php

if (isset ( $_GET["on"] )) {
	
	$led =  $_GET["on"];
	
	if (is_numeric($led)) {
		
		system("gpio -g mode 18 out");
		
		system("gpio -g write 18 ".$led);
		
	}else{
		echo ("No numeric argument.");
	}
}else{ 
	echo ("No argument.");
}
?>