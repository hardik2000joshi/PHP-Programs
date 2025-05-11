<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php for travelling website</title>
</head>
<body>
    <h1>PHP file for the server side work of travelling website</h1>
    <?php
    echo "<h2>Welcome to Travelling website Form</h2>";
    $server="localhost";
    $username="root";
    $password=" ";
    $database="travelling";
    $connection=mysql_connect($server, $username, $password, $database);
    if(!$connection){
        die("Connection failed: ".mysql_connect_error());
    }
    echo "Connecting Successfully to database <br>";
    ?>
</body>
</html>