<?php
class User{
    //Properties
   public $name;
   public $email;
   public $password;
public function __construct($name,$email,$password)
{
    $this->name=$name;
    $this->email=$email;
    $this->password=$password;
}
   
function set_name($name){
    $this->name = $name;
}   
function get_name(){
    return $this->name ; 
}
}
//intialization of an object//
$user1 = new User('Shahroz','e@gmail.com','2356d6d6ee5');
$user2 = new User('Rohail','re2155@gmail.com','3265');

// echo $user1->name;
// echo $user2->password;

//  $user1->set_name('Amir');
// $user2->set_name('ALi');
// echo $user1->get_name();
// echo $user2->get_name();
// $user1->name = 'Khalil';
// $user1->name = 'Shahroz';
// $user1->email = '123@gmail.com';
// $user1->password = '012365448326';


// var_dump($user1);
// INHERITENCE
class Employee extends User{
    public function __construct($name,$email,$password,$title)
    {
        parent::__construct($name,$email,$password);
        $this->title=$title;

    }
    public function get_Title(){
        return $this->title;
    }
}
$employee1 = new Employee('Shahroz','de@gmail.com','365323','Manager');
echo $employee1->email;
echo $employee1->title;
echo $employee1->password;
echo $employee1->name;
?>
