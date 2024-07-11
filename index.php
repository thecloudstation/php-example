<?php
require_once 'config.php';
require_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo APP_NAME; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1><?php echo APP_NAME; ?></h1>
        <p>Welcome to our sample PHP application!</p>
        <p>The current server time is: <?php echo getCurrentTime(); ?></p>
    </div>
</body>
</html>