<?php
$name = "";
$surname = "";
$email = "";
//$errors = array();
// connect to the database,using php my admin
$db = mysqli_connect('localhost','root','','testdatabase');

//if the sign up button is clicked
    if(isset($_POST["submit"])){
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $name = mysqli_real_escape_string($db, $_POST['name']);
        $surname = mysqli_real_escape_string($db, $_POST['surname']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        $sql = "INSERT INTO users(Email,firstName,lastName,,Password)
        VALUES('$email','$name','$surname','$password')";
        echo $name . $surname . $email . $password;
        $sql = "INSERT INTO users(firstName,lastName,Email,Password)
        VALUES('$name','$surname','$email','$password')";

        mysqli_query($db,$sql);

        header('Location: sign-inpage.html');
    }
  


    //ensure that form and fields are filled properly
    /*

     if(isset($_POST['submit'])){
        $name = mysql_real_escape_string($_POST['name']);
        $surname = mysql_real_escape_string($_POST['surname']);
        $email = mysql_real_escape_string($_POST['email']);
        $password = mysql_real_escape_string($_POST['password']);
    }
    if(empty($name)){
        array_push($errors,"name required");
    }
    if(empty($surname)){
        array_push($errors,"surname required");
    }
    if(empty($email)){
        array_push($errors,"email required");
    }
    if(empty($password)){
        array_push($errors,"password required");
    }
    //if there are no error save user to database
    if(count($errors)== 0){
        $password = md5($password); //encrypt password before storing to the database
        $sql = "INSERT INTO users(firstName,lastName,Email,Password)
        VALUES('$name','$surname','$email','$password')";
        mysqli_query($db,$sql);

    }
    */



?>