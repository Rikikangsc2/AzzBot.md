

<!-- HTML -->
<html>
<head>
    <title>Bash Command Support</title>
</head>
<body>
    <h1>Bash Command Support</h1>
    <p>This page supports bash commands.</p>
</body>
</html>

<!-- CSS -->
body {
    font-family: sans-serif;
    background-color: #fafafa;
    color: #444;
    padding: 20px;
}

h1 {
    font-size: 2em;
    font-weight: bold;
    margin-bottom: 10px;
}

<!-- PHP -->
<?php
    // This script will execute a bash command
    $command = escapeshellcmd('ls -la');
    $output = shell_exec($command);
    echo $output;
?>

