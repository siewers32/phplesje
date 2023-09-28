<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jouw Auto</title>
</head>

<body>
    <h1><?php echo $_GET['cars']; ?></h1>
    <img src="autoos/<?php echo $_GET['cars']; ?>.jpg">
</body>

</html>