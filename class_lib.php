<?php 

    class Person {
        
        function __construct($person_name) {
            $this->name = $person_name;
        }

        public $name;
        function setName($newName) {
            $this->name = $newName;
        }
        function getName() {
            return $this->name;
        }
       
        public $height;
        function setHeight($newHeight) {
            $this->height = $newHeight;
        }
        function getHeight(){
            return $this->height;
        }

        private $pinNumber;
        private function get_pin() {
            return $this->pinNumber;
        }

    }

    class Employee extends Person {

        function __construct($empName) {
            //$this->setName($empName);
            //using person's setName method instead of the override
            person::setName($empName); 
        }

        public $empID;
        function getEmpID() {
            return $this->empID;
        }
        function setEmpID($new_empID) {
            $this->empID = $new_empID;
        }

        //overrides setName in parent class
        function setName($newName) {
            $this->name = "Assface";
        }

    }

    

?>