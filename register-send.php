<?php 

include('libs/start.php');

if(isset($_POST["submit"])) {
    
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    


} else {
    header("location: ./register.php");
}


?>