<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>GPIO on Raspberry</title>
		<script type="text/javascript" src="ledscript.js"></script>
	</head>
	<body>
	<?php
	system("gpio  -g mode 18 out");
	exec("gpio -g read 18 out, $return");
	?>
	
	<input type="button" id='script' name="scriptbutton" value="Turn on led" onclick="turnLED()"/>

	</body>
</html>