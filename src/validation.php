<?php

if(isset($_POST['submit']))
{
        
            //Checking email
        if(empty($_POST['email'])){
            echo 'An email is required ,<br />';
        }
        else
        {
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'email must be a valid email address';
            }
        }
        //Checking name

        if(empty($_POST['name'])){
            echo 'Name is required ,<br />';
        }
        else
        {
            $name = $_POST['name'];
            if(!preg_match('/^[a-zA-Z\s]+$/',$name))
            {
                echo 'Name must be letters';
            }
        }

        //Checking surname
        if(empty($_POST['surname'])){
            echo 'Surname is required ,<br />';
        }
        else
        {
            $surname = $_POST['name'];
            if(!preg_match('/^[a-zA-Z\s]+$/',$surname))
            {
                echo 'Surname must be letters';
            }
            
        }
        
        //Checking if password is not empty
        if(empty($_POST['password'])){
            echo 'Password is required ,<br />';
        }
        else{
            $password = mysqli_real_escape_string($db, $_POST['password']);
        }


        header('Location: sign-inpage.html');


}
    
?>
    