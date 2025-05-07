<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators in PHP</title>
</head>
<body>
    <?php
    /* Operators in PHP:
    1. Arithmetic Operators: +, -, *, /, %, **
    2. Assignment Operators: =, +=, -=, *=, /=, %=, **=
    3. Comparison Operators: ==, ===, !=, !==, >, <, >=, <=
    4. logical operators: &&, ||, !
    5. Increment/Decrement Operators: ++, --
    6. String Operators: ., .=
    7. Array Operators: +, ==, ===, !=, !==
    8. Type Operators: instanceof
    */
    // Arithmetic Operators:
    echo "<h2>Arithmetic Operator</h2>";
    $variable1=45;
    $variable2=20;
    // echo- for output
    
    echo $variable1; //variable1 is 45
    echo "<br>";
    echo $variable2; //variable2 is 20
    echo "<br>";
    echo "addition of $variable1 and $variable2 is: ", $variable1+$variable2; //this is addition of two variables
    echo "<br>";
    echo "difference of $variable1 and $variable2 is: ", $variable1-$variable2; //this is subtraction of two variables
    echo "<br>";
    echo "multiplication of $variable1 and $variable2 is: ", $variable1*$variable2; //this is multiplication of two variables
    echo "<br>";
    echo "division of $variable1 and $variable2 is: ", $variable1/$variable2; //this is division of two variables
    echo "<br>";
    echo "remainder of $variable1 and $variable2 is: ", $variable1%$variable2; //this is modulus of two variables
    echo "<br>";
    echo "power of $variable1 and $variable2 is: ", $variable1**$variable2; //this is power of two variables

    ?>
</body>
</html>