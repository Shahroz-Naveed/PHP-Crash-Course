   <?php
   session_start();
if(isset($_POST['submit']))
{
    $username= filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
    $password= $_POST["password"];
    if($username=="Shahroz" &&  $password == "password" )
{
    $_SESSION['username'] = $username;
    header("Location: /PHP/extras/dashboard.php");
}else{
    echo "Incorrect-credentials";
}
}

?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method = "POST">
<div>
<label for="username">User-Name:</label>
<input type="text" name = "username">
</div>
<div>
<label for="password">Password:</label>
<input type="password" name = "password">

</div>
<input type="submit" value="submit" name ="submit">
</form>