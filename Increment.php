<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Increment and Decrement in PHP</title>
</head>
<body>
    <h1>Increment and decrement in php</h1>
    <?php
    /* Increment and Decrement Operators: used to increment or decrement a variable by 1
     ++: increment operator
     --: decrement operator
     */
    echo "<h2>++ increment operator</h2>";
    $xyz=10;
    echo "value of xyz is: ", $xyz; // output: 10
    echo "<br>";
    echo "value of xyz is: ", $xyz++; // output: 10
    echo "<br>";
    echo "value of xyz is: ", $xyz; // output: 11
    echo "<br>";
    echo "value of xyz is: ", ++$xyz; // output: 12
    echo "<br>";
    echo "value of xyz is: ", $xyz; // output: 12
    echo "<br>";
    echo "<h2>-- decrement operator</h2>";
    $jkl=45;
    echo "value of jkl is: ", $jkl; // output: 45
    echo "<br>";
    echo "value of jkl is: ", --$jkl; // output: 44
    echo "<br>";
    echo "value of jkl is: ", $jkl; // output: 44
    echo "<br>";
    echo "value of jkl is: ", $jkl--; // output: 44
    echo "<br>";
    echo "value of jkl is: ", $jkl; // output: 43

    ?>
</body>
</html>