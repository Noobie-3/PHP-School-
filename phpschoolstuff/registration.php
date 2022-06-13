<?php
    if(!isset($username) && !isset($password))
    {
        $username = " ";
        $password = " ";
    }
?>

<form action="validateRegister.php" method="post">
    <label for="username"><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="username"
     value="<?php htmlspecialchars($username)?>"><br>

    <?php if(isset($name_error)) {?>
        <p><?php echo $name_error?></p>
    <?php }?>

    <label for="password"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="password" 
    value="<?php htmlspecialchars($password)?>"><br>
    
    <?php if(isset($pass_error)) {?>
        <p><?php echo $pass_error?></p>
    <?php }?>

    <input type="submit" value="login"> 
   
</form>