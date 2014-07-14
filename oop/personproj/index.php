<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <p>First Name: <input type="text" name="firstName"></p>
            <p>Middle Name: <input type="text" name="middleName"></p>
            <p>Last Name: <input type="text" name="lastName"></p>
            <input type="submit" name="submitButton" />
        </form>
        <?php
            require_once 'person.php';
            $a_person=new Person();
            $a_person->first_name='James';
            $a_person->middle_name='Locus';
            $a_person->last_name='Scott';
            
            echo $a_person->get_full_name()."<br/>";
            echo $a_person->get_reverse_name();
        ?>
    </body>
</html>
