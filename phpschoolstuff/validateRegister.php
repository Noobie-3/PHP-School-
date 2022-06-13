<?php
    //$username = $_POST['username'];
    //$password = $_POST['password'];

    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');


    if(empty($username))
    {
        $name_error = "Please enter a username";
    }
    elseif(strlen($username) < 6)
    {
        $name_error = "Must have a minimum of 6 characters";
    }

    if(empty($password))
    {
        $pass_error = "Please enter a password";
    }
    elseif(strlen($password) < 6)
    {
        $pass_error = "Must have a minimum of 6 characters";
    }

    if(empty($name_error) && empty($pass_error))
    {
        include('success.php');
    }
    else
        include('index.php');


  
?>