<?php

    include_once ("../connection/db.php");

    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    
    $result = mysqli_query($conn, "INSERT INTO customer (first_name, last_name, email, phone, address) VALUES ('$fname', '$lname', '$email', '$phone', '$address');");

    header("Location:../index.php");