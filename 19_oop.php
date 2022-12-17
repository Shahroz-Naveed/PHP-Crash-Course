<?php
class User{
    //Properties
   public $name;
   public $email;
   public $password;
function set_name($name){
    $this->name = $name;
}   
function get_name(){
    return $this->name ; 
}
}
//intialization of an object//
$user1 = new User();
$user2 = new User();

 $user1->set_name('Amir');
$user2->set_name('ALi');
echo $user1->get_name();
echo $user2->get_name();
// $user1->name = 'Khalil';
// $user1->name = 'Shahroz';
// $user1->email = '123@gmail.com';
// $user1->password = '012365448326';


// var_dump($user1);
?>