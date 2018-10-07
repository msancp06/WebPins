function turnLED(turn){
	//Create an asynchronous request
	var getRequest = new XMLHttpRequest();
	//Add variable
	getRequest.open("GET", "pinControl.php?on=" + turn, true);
	getRequest.send(null);
	//Just for debug
	getRequest.addEventListener("load", function (event) {
   	console.log(this);
	});
	//Feedback about the operation
	getRequest.onreadystatechange = function () {
		if (getRequest.readyState == 4 && getRequest.status == 200) {
			alert ("Done." );
			return ("200");	
		}else if (getRequest.readyState == 4 && getRequest.status == 500) {
			alert ("Internal error");
			return ("500");
		}
	}
}