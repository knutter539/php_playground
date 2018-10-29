<?php 

    class person {
        var $name;
        public $height;
        protected $socialInsurance;
        private $pinNumber;

        function __construct($person_name) {
            $this->name = $person_name;
        }

        function set_name($new_name) {
            $this->name = $new_name;
        }
        
        function get_name() {
            return $this->name;
        }
       
        private function get_pin() {
            return $this->pinNumber;
        }

    }

    class employee extends person {

        function __construct($empName) {
            $this->set_name($empName);
        }

    }

?>