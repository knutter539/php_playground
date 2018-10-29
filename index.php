<?php
    ini_set('display_errors', 1); 
    error_reporting(E_ALL);
    
    include("class_lib.php");
    
    $nick = new person("");
    $kara = new person("");

    $nick->set_name("Nick Baranowski");
    $kara->set_name("Kara Krajci");

    echo "Nick's Full Name: ". $nick->get_name();
    echo "<br>";
    echo "Kara's Full Name: ". $kara->get_name();


    $newGuy = new person("New Guy");
    echo "<br><br>";
    echo "The New Guy's Name Is: ". $newGuy->get_name();

    echo "<br>Pin Number:". $newGuy->pinNumber;

?>