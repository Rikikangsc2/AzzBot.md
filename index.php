<!DOCTYPE html>
<html>
<head>
	<title>Contoh Kode</title>
	<style>
		/* Stylesheet */
	</style>
</head>
<body>
	<h1>Contoh Kode</h1>
	<p>RAM Storage:</p>
	<div id="ram-storage"></div>
	<p>Logs:</p>
	<div id="logs"></div>
	<script>
		// JavaScript
		// Menerima informasi dari kode lain
		window.addEventListener("message", function(event) {
			if (event.data.type === "ram-storage") {
				document.getElementById("ram-storage").innerHTML = event.data.value;
			} else if (event.data.type === "logs") {
				document.getElementById("logs").innerHTML = event.data.value;
			}
		});
	</script>
</body>
</html>
