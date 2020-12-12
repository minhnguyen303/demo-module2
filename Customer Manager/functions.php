<?php
//include_once "Management.php";
//include_once "Customer.php";
///*$customer_list = array(
//    "0" => array("name" => "Mai Văn Hoàn", "day_of_birth" => "1983/08/20", "address" => "Hà Nội", "image" => "images/img1.jpg"),
//    "1" => array("name" => "Nguyễn Văn Nam", "day_of_birth" => "1983/08/21", "address" => "Bắc Giang", "image" => "images/img2.jpg"),
//    "2" => array("name" => "Nguyễn Thái Hòa", "day_of_birth" => "1983/08/22", "address" => "Nam Định", "image" => "images/img3.jpg"),
//    "3" => array("name" => "Trần Đăng Khoa", "day_of_birth" => "1983/08/17", "address" => "Hà Tây", "image" => "images/img4.jpg"),
//    "4" => array("name" => "Nguyễn Đình Thi", "day_of_birth" => "1983/08/19", "address" => "Hà Nội", "image" => "images/img5.jpg")
//);*/
//
//$management = new Management();
//$customer_list = $management->getCustomers();
//$filtered_customers = [];
//
//function searchByDate($customers, $from_date, $to_date) {
//    if(empty($from_date) && empty($to_date)){
//        return $customers;
//    }
//    $filtered_customers = [];
//    foreach($customers as $customer){
//        if(!empty($from_date) && (strtotime($customer['day_of_birth']) < strtotime($from_date)))
//            continue;
//        if(!empty($to_date) && (strtotime($customer['day_of_birth']) > strtotime($to_date)))
//            continue;
//        $filtered_customers[] = $customer;
//    }
//    return $filtered_customers;
//}
//
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    $name = $_POST["name"];
//    $birth = $_POST["birth"];
//    $phone = $_POST["phone"];
//    $address = $_POST["address"];
//
//    $customer = new Customer($name, $birth, $phone, $address);
//    $management->addCustomer($customer);
//}
//else{
//    $from_date = $_GET["from"];
//    $to_date = $_GET["to"];
//    $filtered_customers = searchByDate($customer_list, $from_date, $to_date);
//}