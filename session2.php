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

echo "Student Name is :".$_SESSION['name']."<br/>";

echo "Student Pass is :".$_SESSION['pass'];

    ?>
</body>
</html>