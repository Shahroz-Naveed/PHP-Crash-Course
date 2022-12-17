<?php
session_start();  
if(isset($_SESSION['username'])){
    echo '<h1>Welcome' . $_SESSION['username'] . '</h1>';
    echo '<a href="logout.php"> Logout</a>';
}else{ 
    echo "<h1>Welcome GUEST!  </h1><br>";
    echo '<a href="/PHP/13_sessions.php">HOME</a>';
}
?>