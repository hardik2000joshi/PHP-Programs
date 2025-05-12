<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Addition{
        public function add($p, $q){
            return $p+$q;
        }
    }
    class Substraction extends Addition{
        public function sub($p, $q){
            return $p-$q;
            echo "The sum of $p and $q is: ", $this->add($p, $q)."<br>";
            echo "The substraction of $p and $q is: ", $this->sub($p, $q)."<br>";
        }
    }
    $obj1=new Substraction();
    $obj1->add(10, 20);
    $obj1->sub(20, 10);
    echo "The sum of 10 and 20 is: ", $obj1->add(10, 20)."<br>";
    echo "The substraction of 20 and 10 is: ",$obj1->sub(20, 10). "<br>";
    ?>
</body>
</html>