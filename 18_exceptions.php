<?php
function inverse($x){
    if(!$x){
        throw new Exception('You are dividing a number with zero');
    }
    return 1/$x;
}
// echo inverse(5);
try{
// echo inverse(3);
// echo inverse(55);
echo inverse(23);
echo inverse(0);

}catch(Exception $e){
echo 'Caught an Exception:', $e->getMessage();
}finally{
echo 'You got a way to handle certain exceptions';
}