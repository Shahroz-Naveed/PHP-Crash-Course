<?php
class Customer{
    Private $id;
    Private $name;
    Private $password;
    Private $credit;
    Private $location;
public function getItems($id,$name,$password,$credit,$location){
    $this->id = $id;
    $this->name = $name;
    $this->password = $password;
    $this->credit = $credit;
    $this->location = $location;

}
}
$customer = new Customer();
echo $customer->getItems('5','Shahroz','123456','500$','Apple park california');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Oriented Programming</title>
</head>
<body>
    
</body>
</html>