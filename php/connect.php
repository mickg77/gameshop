<?php
    $servername="localhost";
    $username="michael";
    $password="pass123";
    
    try {
        $conn= new PDO ("mysql:host=$servername;dbname=gamesdb",$username, $password);        
        $conn-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //echo "Connected Successfully fjkf";
        
    }
    catch(PDOException $e) {
        echo "Connection Failed" .$e->getMessage();
    }    
    //this simple function changes the initialsation of the php.ini file
    //it turns error display on and finally passes those errors to the
    //error reporting function
    //this gives us a clue where we've made any syntax errors
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ERROR);
   
    
?>