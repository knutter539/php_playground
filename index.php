<?php
    ini_set('display_errors', 1); 
    error_reporting(E_ALL);
    
    include("class_lib.php");
    
    $nick = new Person("");
    $kara = new Person("");

    $nick->setName("Nick Baranowski");
    $kara->setName("Kara Krajci");

    echo "Nick's Full Name: ". $nick->getName();
    echo "<br>";
    echo "Kara's Full Name: ". $kara->getName();


    $newGuy = new Person("New Guy");
    echo "<br><br>";
    echo "The New Guy's Name Is: ". $newGuy->getName();
    echo "<br><br>";

    //private property, will error out
    //echo "<br>Pin Number:". $newGuy->pinNumber;

    $newEmployee = new Employee("Matt Baranowski");
    $newEmployee->setHeight("6'1");
    $newEmployee->setEmpID("1273");
    echo "New Employee: ".$newEmployee->name;
    echo "<br>";
    echo "Height: ".$newEmployee->height;
    echo "<br>";
    echo "ID: ".$newEmployee->empID;


?>