<?php
$user = $_GET["user"];
$password = $_GET["password"];

if($user == "admin" && $password =="password123"){
    echo "Login Sucessfully";
}else{
    echo "Invalid User!";
}




?>