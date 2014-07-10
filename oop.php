<?php
    //Declaring a class
    class User{
        var $name= "FTFL";
        var $email = "";
    }
    // Instantiate an object from the class
    $user=new User();

    // var_dump($user); // Debug the variable
    echo $user->name;
?>