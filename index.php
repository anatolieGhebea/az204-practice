<?php
$greeting = "Hello, this is a test of a php app deployment on Azure Web App service"
?>
<!DOCTYPE html>
<html>
<head>
  <title>AZ204 DemoApp Deploy</title>
</head>
<body>
  <h1>Hello, World!</h1>
  <p>
    <?= $greeting ?>
  </p>
  <a href="about.php">about</a>
</body>
</html>
