<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Comparision Operator in PHP</h1>
    <?php
     /*comparision Operator: used to compare two values
     ==, ===, !=, !==, >, <, >=, <=
     ==: equal to*/
     // echo- for output
    echo "<h2>== Comparision Operator</h2>";
    // $- for variable declaration
    $a=10;
    $b=30;
    echo "The result of a==b is: ";
    echo var_dump($a==$b); // output: false
    echo "<br>";
    echo "the result of b==b is: ";
    echo var_dump($b==$b); // output: true
    echo "<br>";
    echo "<h2>=== Comparision Operator</h2>";
    echo "The result of a===b is: ", var_dump($a===$b); // output: false
    echo "<br>";
    echo "The result of a===a is: ", var_dump($a===$a); // output: true
    echo "<br>";
    echo "<h2>!= Comparision Operator</h2>";
    echo "The value of a!=b is: ", var_dump($a!=$b); // output: true 
    echo "<br>";
    echo "The value of b!=b is: ", var_dump($b!=$b); // output: false   
    echo "<br>";
    echo "<h2>!== Comparision Operator</h2>";
    echo "The value of a!==b is: ", var_dump($a!==$b); // output: true
    echo "<br>";
    echo "The value of b!==b is: ", var_dump($b!==$b); // output: false
    echo "<br>";
    echo "<h2> < Comparision Operator</h2>";
    echo "The value of a<b is: ", var_dump($a<$b); // output: true
    echo "<br>";
    echo "<h2> > Comparision Operator</h2>";
    echo "The value of a>b is: ", var_dump($a>$b); // output: false
    echo "<br>";
    echo "<h2> <= Comparision Operator</h2>";
    echo "The value of b<=a is: ", var_dump($b<=$a); // output: false
    echo "<br>";
    echo "<h2> >= Comparision Operator</h2>";
    echo "The value of b>=a is: ", var_dump($b>=$a); // output: true
    ?>
</body>
</html>