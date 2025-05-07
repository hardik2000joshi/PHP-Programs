<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types in php</title>
</head>
<body>
    <h1>Data Types in Php</h1>
    <?php
    // Data Types: used to define the type of data that can be stored in a variable
    /*
    Data types: int, float, string, boolean, array, object;
    */
    echo "<h2>Int data type</h2>";
    $a=10; 
    echo var_dump($a); // output: int(10)
    // var_dump: used to display the data type and value of a variable
    echo "<br>";  
    echo "<h2>Float data type</h2>"; 
    $b=20.5;
    echo var_dump($b); // output: float(20.5)
    echo "<br>";
    echo "<h2>String data type</h2>";
    $def="Welcome to string data type in php";
    echo var_dump($def); // output: string(35) "Welcome to string data type in php"
    echo "<br>";
    echo "<h2>Boolean data type</h2>";
    $xyz=10;
    $p=15;
    echo var_dump($xyz<$p); // output: bool(true)
    echo "<br>";
    $t=false;
    echo var_dump($t); // output: bool(false)
    echo "<br>";
    echo "<h2>Array Data Type</h2>";
    $array=array("Silk", "perk", "Kitkat", "Dairy Milk", "fruit&nut", "Chocolate Milk", "Chocolate cake");
    echo var_dump($array); // output: array(7) { [0]=> string(4) "Silk" [1]=> strinut", "Chocolate Milk", "Chocolate cake");g(4) "perk" [2]=> string(6) "Kitkat" [3]=> string(11) "Dairy Milk" [4]=> string(12) "fruit&nut" [5]=> string(14) "Chocolate Milk" [6]=> string(13) "Chocolate cake" }
    ?>
</body>
</html>