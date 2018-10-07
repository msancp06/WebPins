<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>GPIO on Raspberry</title>
		<script type="text/javascript" src="ledscript.js"></script>
	</head>
	<body>
	
		<input type="button" id='on' name="scriptButtonOn" value="Turn on led" onclick="turnLED(1)"/>
	
		<input type="button" id='off' name="scriptButtonOff" value="Turn off led" onclick="turnLED(0)"/>
	</body>
</html>