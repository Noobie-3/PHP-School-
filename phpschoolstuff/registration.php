<?php

    class Register {
            public $FirstName = " ";
            public $LastName = " ";
            public $Email = " ";
            public $password = " ";



        
    }

    $User1 = new Register();

?>



<form action="validateRegister.php" method="post">
    <label for="FirstName"><b>First Name</b></label><br>
    <input type="text" placeholder="Enter First name" name="FirstName"
     value="<?php htmlspecialchars($User1->FirstName)?>"><br>

    <?php if(isset($FirstName_error)) {?>
        <p><?php echo $FirstName_error?></p>
    <?php }?>

    <label for="LastName"><b>Last Name</b></label><br>
    <input type="text" placeholder="Enter Last Name" name="LastName" 
    value="<?php htmlspecialchars($User1->LastName)?>"><br>
    
    <?php if(isset($LastName_error)) {?>
        <p><?php echo $LastName_error?></p>
    <?php }?>

    <label for="Email"><b>Email</b></label><br>
    <input type="Email" placeholder="Enter Email" name="Email" 
    value="<?php htmlspecialchars($User1->Email)?>"><br>

    <?php if(isset($Email_error)) {?>
        <p><?php echo $Email_error?></p>
    <?php }?>


    <label for="password"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" 
    value="<?php htmlspecialchars($User1->password)?>"><br>
    
    <?php if(isset($pass_error)) {?>
        <p><?php echo $pass_error?></p>
    <?php }?>


    <input type="submit" value="login"> 
   
</form>
