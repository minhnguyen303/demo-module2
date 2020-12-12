<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="date" name="birth" placeholder="Birth">
    <input type="number" name="phone" placeholder="Phone">
    <input type="text" name="address" placeholder="Address">
    <button>Add</button>
</form>
</body>
</html>

<?php
include_once "actions.php";
include_once "Customer.php";

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $birth = $_POST['birth'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $customer_list = loadData();
    $user = new Customer($name,$birth,$phone,$address);
    $array = ["name"=>$user->getName(),"birth"=>$user->getBirth(),"phone"=>$user->getPhone(),"address"=>$user->getAddress()];
    addCustomer($customer_list, $array);
    header("location:index.php");
}