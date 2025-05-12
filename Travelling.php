<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php for travelling website</title>
</head>
<body>
    <h1>PHP file for the server side work of travelling website</h1>
    <?php
    // echo "<h2>Welcome to Travelling website Form</h2>";
    $insert=false;
    if(isset($_POST['name'])){
        //set connection variables
    
    $server="localhost";
    $username="root";
    $password=" ";
    $database="travelling";
    $connection=mysql_connect($server, $username, $password, $database);
    if(!$connection){
        die("Connection failed: ".mysql_connect_error());
    }
    echo "Connecting Successfully to database <br>";
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $age=$_POST['age']
    $phone=$_POST['phone'];
    $destination=$_POST['destination'];
    $date=$_POST['date'];
    $desc=$_POST['desc'];
    $sql="INSERT Into 'trip' ('name', 'email', 'gender', 'address', 'age', 'phone', 'destination', 'date', 'desc') VALUES ($name, $email, $gender, $address, $age, $phone, $destination, $date, $desc, current_timestamp());";
    echo $sql;
    // Execute the query
    if($connection->query($sql)==true){
        // echo "successfully inserted into database";
        $insert=true;
    }
    else {
        echo "Error: $sql <br> $connection->error";
    }
    $connection->close(); 
}

    ?>
</body>
</html>