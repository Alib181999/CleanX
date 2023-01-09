<?php


require('config.php');


extract($_POST);


$sql = "INSERT into contactus (name,email,number,services,message,created_date) VALUES('" . $name . "','" . $email . "','" . $number . "','" . $services . "','" . $message . "','" . date('Y-m-d') . "')";


$success = $mysqli->query($sql);


if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
}


echo "Thank You For Contacting Us ";





?>