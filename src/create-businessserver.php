<?php

$businessName = "";
$phoneNumber = "";
$businessEmail = "";
$productOrService = "";
$price = "";
$empName = "";
$empSurname = "";
$empOccupation = "";



$db =  mysqli_connect('localhost', 'root','', 'testdatabase');

if(isset($_POST["businessSubmit"]))
{

    $businessName = mysqli_real_escape_string($db, $_POST['businessName']);
    $phoneNumber = mysqli_real_escape_string($db, $_POST['phoneNumber']);
    $businessEmail = mysqli_real_escape_string($db, $_POST['businessEmail']);
    $productOrService = mysqli_real_escape_string($db, $_POST['productOrService']);
    $price = mysqli_real_escape_string($db, $_POST['price']);
    $empName = mysqli_real_escape_string($db, $_POST['empName']);
    $empSurname = mysqli_real_escape_string($db, $_POST['empSurname']);
    $empOccupation = mysqli_real_escape_string($db, $_POST['empOccupation']);



    $sql = "INSERT INTO vendor(businessName, phoneNumber, emailAddress, productOrServiceOffered, price, firstName, lastName, occupation)
    VALUES('$businessName', '$phoneNumber', '$businessEmail', '$productOrService', '$price', '$empName', '$empSurname', '$empOccupation')";

    mysqli_query($db, $sql);



    header('Location: create-business.html');

}


?>