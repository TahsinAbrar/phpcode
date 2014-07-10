<?php
    //Declaring a class
    class User{
        var $name= "FTFL";
        var $email = "";
        
        function getName(){
            return "FTFL2";
        }
    }
    // Instantiate an object from the class
    $user=new User();

    // var_dump($user); // Debug the variable
    echo $user->name; // Accesing class property
    
    echo $user->getName(); // Accessing class method
?>