<?php
$file = 'extras/users.txt';
if(file_exists($file)){
    $handle = fopen($file,'r');
    $content = fread($handle,filesize($file));
    fclose($handle);
    echo $content;
}else{
    $handle = fopen($file,'w');
    $content = 'Raja'.PHP_EOL. 'Lal'.PHP_EOL. 'Ahmad';
    fwrite($handle,$content);
    fclose($handle);
}