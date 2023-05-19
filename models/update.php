<?php

    include_once ("../connection/db.php");

    $id = $_GET['id'];

    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    
    $result = mysqli_query($conn, "UPDATE customer SET first_name = '$fname', last_name = '$lname', email = '$email', phone = '$phone', address = '$address' WHERE id = '$id';");

    header("Location:../index.php");