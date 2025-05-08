<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arrays in PHP</h1>
    <?php
    // Arrays: used to store multiple values in a single variable
    $abc=array("cold drink", "Chocolate cake", "pizza", "pasta", "burger", "waffers", "vanilla ice cream");
    var_dump($abc); // output: array(7) { [0]=> string(10) "cold drink" [1]=> string(13) "Chocolate cake" [2]=> string(5) "pizza" [3]=> string(5) "pasta" [4]=> string(6) "burger" [5]=> string(7) "waffers" [6]=> string(17) "vanilla ice cream" }
    /*echo $abc[0]; // output: pizza
    echo "<br>";
    echo $abc[1]; // output: pasta
    echo "<br>";
    echo $abc[2]; // output: waffers
    echo "<br>";
    echo $abc[3]; // output: vanilla ice cream
    echo "<br>";
    echo $abc[4]; // output: cold drink
    echo "<br>";
    echo $abc[5]; // output: Chocolate cake
    echo "<br>";
    echo $abc[6]; // output: burger
    echo "<br>";
    echo $abc.count($abc); // output: 7*/
    ?>
</body>
</html>