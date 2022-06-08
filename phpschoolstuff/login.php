<?php 
    if(!isset($username) && !isset($password)) {
        $username="";
        $password="";
    }
?>



<form action="validate.php" method="post">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" value="<?php echo htmlspecialchars($username) ?><br>" required>
    <?php if(isset($nameError)) {?>
        <p><?php echo $nameError?></p>
    <?php }?>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
  <label>
    <input type="submit" Login value="Submit"/>
  </label>
</form>