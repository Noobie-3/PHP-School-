<?php
    //$username = $POST['username'];
    //$password = $_POST['password'];

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');



if(empty($username)) {
    $nameError = "please enter a username";
}
elseif(strlen(($username) < 6) {
    $nameError = "Must have a minimum of 6 characters";
} 

if(empty($password)) {
    $passError = "please enter a username";
}
elseif(strlen(($password) < 6) {
    $passError = "Must have a minimum of 6 characters";
} 
    
if(empty($nameError) && empty($passError)) {
    include('suces.php')
}
else
include('login.php')

include('registration.php');


?>