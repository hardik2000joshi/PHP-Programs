<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Logical Operator in php</h1>
    <?php
    /*
    Logical Operators: used to combine two or more conditions
    &&: used to check if both conditions are true
    ||: used to check atleast one condition is true
    !: used to reverse the condition e.g. if condition is true, it will return false and vice versa
    Exclusive OR: used to check if only one condition is true
    */
    echo "<h2>Logical && operator</h2>";
    $p=25;
    $r=55;
    echo "The value of p is: ", $p;  // output: 25
    echo "<br>";
    echo "The value of r is: ", $r; // output: 55
    echo "The result of && and operator is: ", var_dump($p==$r && $r==105); // output: false
    echo "<br>";
    echo "The result of && and operator is: ", var_dump($p==25 && $r==7); // output: false
    echo "<br>";
    echo "The result of && and operator is: ", var_dump($p<=$r && $r>$p); // output: true
    echo "<br>";
    echo "<h2>Logical || operator</h2>";
    echo "The result of or operator is: ", var_dump($p==70 || $r==55); // output: true
    echo "<br>";
    echo "The result of or operator is: ", var_dump(70<25 || 100==105); // output: false
    echo "<br>";

    echo "<h2>Logical ! operator</h2>";
    echo "The result of (!($p==25 && $r==55)) is: ", var_dump(!($p==25 && $r==55)); // output: false
    echo "<br>";
    echo "The result of (!($p>$r || $r==25)) is: ", var_dump(!($p>$r || $r==25)); // output: true
    ?>
</body>
</html>