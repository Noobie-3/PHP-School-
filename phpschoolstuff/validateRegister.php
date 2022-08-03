<?php
    //$username = $_POST['username'];
    //$password = $_POST['password'];

    $FirstName = filter_input(INPUT_POST, 'FirstName');
    $LastName = filter_input(INPUT_POST, 'LastName');
    $Email = filter_input(INPUT_POST, 'Email');
    $password = filter_input(INPUT_POST, 'password');


    if(empty($FirstName)) 
    {
        $FirstName_error = "Please enter a First Name";
    }
    elseif(strlen($LastName) < 3) {
        $FirstName_error = "Must have a minimum of 3 characters";
    }

    if(empty($LastName)) {
        $LastName_error = "Please enter a Last Name";
    }
    elseif(strlen($LastName) < 3) {
        $LastName_error = "Must have a minimum of 3 characters";
    }

    if(empty($Email)) {
        $Email_error = "Please enter an Email address";
    }
    elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $Email_error = "Invalid email format";
    }

    
    if(empty($password)) {
        $pass_error = "Please enter a Password";
    }
    elseif(strlen($password) < 6) {
        $pass_error = "Must have a minimum of 6 characters";
    }

    if(empty($FirstName_error) && (empty($LastName_error) && empty($pass_error))) {
        include('successRegister.php');
    }
    else
        include('registration.php');


  
?>