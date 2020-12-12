<?php
include_once "Management.php";
include_once "Customer.php";
/*$customer_list = array(
    "0" => array("name" => "Mai Văn Hoàn", "day_of_birth" => "1983/08/20", "address" => "Hà Nội", "image" => "images/img1.jpg"),
    "1" => array("name" => "Nguyễn Văn Nam", "day_of_birth" => "1983/08/21", "address" => "Bắc Giang", "image" => "images/img2.jpg"),
    "2" => array("name" => "Nguyễn Thái Hòa", "day_of_birth" => "1983/08/22", "address" => "Nam Định", "image" => "images/img3.jpg"),
    "3" => array("name" => "Trần Đăng Khoa", "day_of_birth" => "1983/08/17", "address" => "Hà Tây", "image" => "images/img4.jpg"),
    "4" => array("name" => "Nguyễn Đình Thi", "day_of_birth" => "1983/08/19", "address" => "Hà Nội", "image" => "images/img5.jpg")
);*/

$management = new Management();
$customer_list = $management->getCustomers();
$filtered_customers = [];

function searchByDate($customers, $from_date, $to_date)
{
    if (empty($from_date) && empty($to_date)) {
        return $customers;
    }
    $filtered_customers = [];
    foreach ($customers as $customer) {
        if (!empty($from_date) && (strtotime($customer->getBirth()) < strtotime($from_date)))
            continue;
        if (!empty($to_date) && (strtotime($customer->getBirth()) > strtotime($to_date)))
            continue;
        $filtered_customers[] = $customer;
    }
    return $filtered_customers;
}

?>

    <!DOCTYPE html>
    <html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
    <form method="get">
        <fieldset>
            <legend>Lọc theo ngày sinh:</legend>
            Từ: <input id="from" type="text" name="from" placeholder="yyyyy/mm/dd"/>
            Đến: <input id="to" type="text" name="to" placeholder="yyyy/mm/dd"/>
            <button>Lọc</button>
        </fieldset>
    </form>
    <form method="post">
        <fieldset>
            <legend>Thêm khách hàng:</legend>
            <input type="text" name="name" placeholder="Tên">
            <input type="text" name="birth" placeholder="Ngày sinh">
            <input type="text" name="phone" placeholder="Số điện thoại">
            <input type="text" name="address" placeholder="Địa chỉ">
            <button>Thêm</button>
        </fieldset>
    </form>
    <table border="0">
        <caption><h2>Danh sách khách hàng</h2></caption>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Số Điện Thoại</th>
            <th>Địa chỉ</th>
        </tr>
        <?php

        if (count($filtered_customers) === 0) {
            echo "<tr><td colspan='5' class='message'>Không tìm thấy khách hàng nào</td></tr>";
        } else {
            foreach ($filtered_customers as $index => $customer) {
                ++$index;
                $name = $customer->getName();
                $birth = $customer->getBirth();
                $phone = $customer->setPhone();
                $address = $customer->getAddress();
                echo "<tr>
                     <td>$index</td>
                    <td>$name</td>
                    <td>$birth</td>
                    <td>$phone</td>
                    <td>$address</td>
                    </tr>";
            }
        }
        ?>
    </table>
    </body>
    </html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $birth = $_POST["birth"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    $customer = new Customer($name, $birth, $phone, $address);
    $management->addCustomer($customer);
} else {
    $from_date = $_GET["from"];
    $to_date = $_GET["to"];
    $filtered_customers = searchByDate($customer_list, $from_date, $to_date);
}