<?php
// ------SANITIZATION ------//
// if(isset($_POST['submit'])){
//     $name=  htmlspecialchars($_POST['name']);
//     $age=  htmlspecialchars($_POST['age']) ;
//     echo $name;
//     echo $age ;
// }   
if(isset($_POST['submit'])){
    $name= filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);
    $age=  filter_input(INPUT_POST,'age',FILTER_SANITIZE_SPECIAL_CHARS);
    echo $name.'<br>';
    echo $age;
} 

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
<div class="c1">
    <label for="name">Name:</label>
    <input type="text" name="name">
</div>
<div class="c2">
    <label for="age">Age:</label>
    <input type="text" name="age">
</div>
<input type="submit" value = "submit" name ="submit" >  
</form>