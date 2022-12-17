<?php
$allowed_ext = array('png','jpg', 'jpeg','gif');
if(isset($_POST['submit'])){

    if(!empty($_FILES['upload']['name'])){
        $file_temp = $_FILES['upload']['tmp_name'];
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $target_dir = "uploads/${file_name}";
        echo $file_temp;
        ////GET FILE extension
        $file_ext = explode('.',$file_name);
        $file_ext = strtolower(end($file_ext));
        
////// Validate File extension
if(in_array($file_ext,$allowed_ext)){
    if($file_size<=1000000){
    move_uploaded_file($file_temp,$target_dir);
    $message = "File uploaded";}
    
}else{
    $message = "Choose relevent extension  please";
}

} else{
    $message = "You did't choose a  File";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File-Upload</title>
</head>
<body>
    <?php echo $message ?? null; ?>  
    <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method= "POST" enctype="multipart/form-data">
<p>Choose a PIC ....!</p>
        <input type="file" name='upload'>
       
     <input type="submit" value="Submit" name='submit' >
     </form>
</body>
</html>