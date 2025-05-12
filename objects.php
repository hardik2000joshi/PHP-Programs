<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h2>Creating objects in php</h2>";
    echo "<p>objects are the real world entities of the class</p>";
    class entities { // class is a blueprint of an object
        public $name;
        public $age;
        public $gender;
        public $emailId;
        public $bloodGroup;
        function setName($name){
            $this->name=$name;
        }
        function getName(){
            return $this->name;
        }

        function setAge($age){
            $this->age=$age;
        }
        function getAge(){
            return $this->age;
        }

        function setGender($gender){
            $this->gender=$gender;
        }
        function getGender(){
            return $this->gender;
        }

        function setEmailId($emailId){
            $this->emailId=$emailId;
        }
        function getEmailId(){
            return $this->emailId;
        }

        function setBloodGroup($bloodGroup){
            $this->bloodGroup=$bloodGroup;
        }
        function getBloodGroup(){
            return $this->bloodGroup;
        }

    }
    $obj1=new entities(); // creating object of class object
    $obj1->setName("John Doe");
    $obj1->setAge(20);
    $obj1->setGender("Male");
    $obj1->setEmailId("John1445Doe@hotmail.com");
    $obj1->setBloodGroup("A+");
    echo "Name of student is: ", $obj1->getName()."<br>";
    echo "Age of student is: ", $obj1->getAge()."<br>";
    echo "Gender of student is: ", $obj1->getGender()."<br>";
    echo "Email id of student is: ", $obj1->getEmailId()."<br>";
    echo "Blood group of student is: ", $obj1->getBloodGroup()."<br>";




    ?>
</body>
</html>