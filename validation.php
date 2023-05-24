<?php

    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname =$_POST['lastname'];
    $email = $_POST['email'];
    $file = $_POST['file'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['psw'];
    $passwordrep = $_POST['psw-repeat'];

    echo $firstname."</br>";
    echo $middlename."</br>";
    echo $lastname."</br>";
    echo $email."</br>";
    echo $file."</br>";
    echo $gender."</br>";
    echo $phone."</br>";
    echo $address."</br>";
    echo $password."</br>";
    echo $passwordrep."</br>";
?>