<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings in PHP</title>
</head>
<body>
    <?php
    echo "<h1>Strings</h1>";
    echo "<h2>strings used to store more than one character in a variable</h2>";
    $abc="Welcome to world of PHP";
    echo var_dump($abc);
    echo "<br>";
    echo "size of string is: ", strlen($abc);
    echo "<br>";
     $def="PHP is a server-side scripting language";
     $ghi="Plugin adds functionality to a web browser";
     echo $def." ".$ghi; // . is used to concatenate two strings
     echo "<br>";
     $words="Strings in PHP";
     echo $words;
     echo "<br>";
     echo "Number of words in string is: ", str_word_count($words);
     echo "<br>";
     echo "Number of letters in string is: ", strlen($words); //output: 14
     echo "<br>";
     echo "Reversed string is: ", strrev($words); //output: PHP ni sgnirtS 
     echo "<br>";
     echo "string at index 2 is: ", substr($words, 2); //output: rings in PHP
     echo "<br>";
     echo "search for string in string is: ", strpos($words, "S");
    ?>
</body>
</html