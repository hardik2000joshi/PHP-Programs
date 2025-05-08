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
    // var_dump() used to display both value and data type of the array
    echo "<br>";
    echo "Total length of array is: ", count($abc); // output: Total length of array is: 7
    /*echo "Total length of array is: ", $abc.count();*/ // wrong Method
    echo "<br>";
    echo "Total size of array is: ", sizeof($abc); // output: Total size of array is: 7
    echo "<br>";
    echo "Array element at index 0 is: ", $abc[0]; // output: Array element at index 0 is: cold drink
    echo "<br>";
    echo "Array element at index 1 is: ", $abc[1]; // output: Array element at index 1 is: Chocolate cake
    echo "<br>";
    echo "Array element at index 2 is: ", $abc[2]; // output: Array element at index 2 is: pizza
    echo "<br>";
    echo "Array element at index 3 is: ", $abc[3]; // output: Array element at index 3 is: pasta
    echo "<br>";
    echo "Array element at index 4 is: ", $abc[4]; // output: Array element at index 4 is: burger
    echo "<br>";
    echo "Array element at index 5 is: ", $abc[5]; // output: Array element at index 5 is: waffers
    echo "<br>";
    echo "Array element at index 6 is: ", $abc[6]; // output: Array element at index 6 is: vanilla ice cream
    echo "<br>";
    //loop through the array
    for ($i=0; $i<=6; $i++){
        echo "<br>";
        echo $abc[$i]; // output: Array elements are: cold drink, Chocolate cake, pizza, pasta, burger, waffers, vanilla ice cream
    }
    echo "<br>";
    for ($i=0; $i<count($abc); $i++){
        echo "<br>";
        echo $abc[$i]; // output: Array elements are: cold drink, Chocolate cake, pizza, pasta, burger, waffers, vanilla ice cream
    }
    echo "<br>";
    for ($j=0; $j<sizeof($abc); $j++){
        echo "<br>";
        echo $abc[$j]; // output: Array elements are: cold drink, Chocolate cake, pizza, pasta, burger, waffers, vanilla ice cream
    }
    echo "<br>";
    echo "<br>";
    echo "Total length of string in array is: ", strlen($abc[2]); // output: Total length of string in array is: 5
    // strlen() used to find length of string in array
   ?>
</body>
</html>