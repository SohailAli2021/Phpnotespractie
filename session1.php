<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    $_SESSION["name"]="peter";
    $_SESSION["pass"]=1234;

    echo "Sesion Variable are set.";
    ?>

<a href="session2.php">Next Page</a>
</body>
</html>