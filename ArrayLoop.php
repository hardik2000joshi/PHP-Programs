<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Loop in php</title>
</head>
<body>
    <h1>Iteration over an array through loop</h1>
    <?php
    echo "<h2>Iteration over an array through for loop</h2>";
    // for loop
    $colors=array("red", "orange", "green", "yellow", "blue", "Sky blue", "purple");
    for ($a=0; $a<sizeof($colors); $a++){
        echo "<br>";
        echo $colors[$a];
    }
    echo "<br>";
    echo "length of array is: ", count($colors); // output: length of array is: 7
    echo "<br>";
    echo "size of array is: ", sizeof($colors); // output: size of array is: 7
    echo "<br>";
    echo "length of string in an array is: ", strlen($colors[3]); // output: length of string in an array is: 6
    echo "<h2>Iteration over an array through foreach loop</h2>";
    // foreach loop: used to loop through arrays
    $courses=array("PHP", "Python", "Javascript", "Node.js", "Angular", "Java");
    foreach($courses as $programs){
        echo "<br>";
        echo $programs;
    }
    echo "<br>";
    echo "length of array is: ", sizeof($courses); // output: length of array is: 6
    echo "<br>";
    echo "size of array is: ", count($courses); // output: size of array is: 6
    // both sizeof() and count() are used to find the size of array
    echo "<br>";
    echo "Array element at index 0 is: ", $courses[0]; // output: Array element at index 0 is: PHP
    echo "<br>";
    echo "Total length of string at index 0 is: ", strlen($courses[1]); // output: Total length of string at index 0 is: 6
    ?>
</body>
</html>