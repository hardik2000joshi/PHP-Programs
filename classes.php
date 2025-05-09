<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>classes in php</title>
</head>
<body>
    <h1>Class is blueprint or template of an object</h1>
    <?php
    echo "<h2>Classes of student in php</h2>";
    class students { // class is a blueprint of an object
        // without public Keyword, we can not access the properties outside the class
        public $NoOfStudents;
        public $NameOfStudents;
        public $RollNoOfStudents;
        public $AgeOfStudents;
        public $MarksOfStudents;
        // constructor is a special function which is called when an object of class is created

        function setNoOfStudents($NoOfStudents){
            $this->NoOfStudents=$NoOfStudents;
        }
        function getNoOfStudents(){
            return $this->NoOfStudents;
        }

        function setNameOfStudents($NameOfStudents){
            $this->NameOfStudents=$NameOfStudents;
        }
        
        function getNameOfStudents(){
            return $this->NameOfStudents;
        }
        
       
          
        
    

        function setRollNoOfStudents($RollNoOfStudents){
           $this->RollNoOfStudents=$RollNoOfStudents;
        }
        function getRollNoOfStudents(){
            return $this->RollNoOfStudents;
        }

        function setAgeOfStudents($AgeOfStudents){
            $this->AgeOfStudents=$AgeOfStudents;
        }
        function getAgeOfStudents(){
            return $this->AgeOfStudents;
        }

        function setMarksOfStudents($MarksOfStudents){
            $this->MarksOfStudents=$MarksOfStudents;
        }
        function getMarksOfStudents(){
            return $this->MarksOfStudents;
        }
    }
        // objects are entities of class
        $top=new students(); // object of class
        $top->setNoOfStudents(10); // setNoOfStudents is a method of class
        $top->setNameOfStudents("Ali, Ahmed, Ahsan, Aliya, Areeba, Ayesha, Alina, Aamir, Asad, Anum"); 
        $top->setRollNoOfStudents(105);
        $top->setAgeOfStudents(20);
        $top->setMarksOfStudents(80);
        echo "No of students are: ", $top->getNoOfStudents()."<br>";
        echo "Name of students are: ", $top->getNameOfStudents()."<br>";
        echo "Roll no of students are: ", $top->getRollNoOfStudents()."<br>";
        echo "Age of students are: ", $top->getAgeOfStudents()."<br>";
        echo "Marks of students are: ", $top->getMarksOfStudents();


        
    

    
    ?>

</body>
</html>