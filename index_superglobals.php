?php
if(isset($_POST['submit'])){
    echo $_POST["name"];
    echo $_POST["age"] ;
}    

?>
<a href="<?php echo $_SERVER['PHP_SELF'];?>? name= Shahroz
&age=23" >Click  </a>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<div class="c1">
    <label for="name">Name:</label>
    <input type="text" name="name">
</div>
<div class="c2">
    <label for="age">Age:</label>
    <input type="text" name="age">
</div>
<input type="submit" value = "submit" name ="submit" >  
</form><