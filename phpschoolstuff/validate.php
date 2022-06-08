<?php
    //$username = $POST['username'];
    //$password = $_POST['password'];

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');


if(empty($username)) {
    $nameError = "please enter a username";
}
elseif(strlen($username) < 6) {
    $nameError = "Must have a minimum of 6 characters";
} 

if(empty($password)) {
    $passError = "please enter a password";
}
elseif(strlen($password) < 6) {
    $passError = "Must have a minimum of 6 characters";
} 
    
if(empty($passError) && empty($passError)) {
    include('sucess.php');
}

include('login.php')

?>