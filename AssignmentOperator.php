<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Assignment Operator</h1>
    <?php
    // Assignment Operators: used to assign values to variables
    // =, +=, -=, *=, /=, %=, **=
    // =: to assign a value
    echo "<h2>= Assignment Operator</h2>";
    $abc=10; // assign 10 to variable abc
    echo "value of abc is: ", $abc; // output: 10
    echo "<br>";
    echo "<h2>+= Assignment Operator</h2>";
    $abc+=20; // add 20 to variable abc
    echo "value of abc is: ", $abc; // output: 30
    echo "<br>";
    echo "<h2>-= Assignment Operator</h2>";
    $abc-=20; // subtract 20 from variable abc
    echo "value of abc is: ", $abc; // output: 10
    echo "<br>";
    echo "<h2>*=Assignment Operator</h2>";
    $abc*=5; // multiply variable abc by 5
    echo "Value of abc is: ", $abc; // output: 50
    echo "<br>";
    echo "<h2>/= Assignment Operator</h2>";
    $abc/=10; // divide variable abc by 10
    echo "value of abc is:", $abc; // output: 5
    echo "<br>";
    echo "<h2>%= Assignment Operator</h2>";
    $abc%=3;
    echo "value of abc is: ", $abc; // output: 2
    echo "<br>";
    echo "<h2>**= Assignment Operator</h2>";
    $abc**=5;
    echo "value of abc is: ", $abc; // output: 32
        ?>
</body>
</html>