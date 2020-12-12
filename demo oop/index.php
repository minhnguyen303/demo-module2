<?php
include_once "actions.php";

$customer_list = loadData();

/*saveData($customer_list);*/
?>
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
<a href="add.php">ADD customer</a>
    <table border="1px solid">
        <tr>
            <th>STT</th>
            <th>Ten</th>
            <th>Ngay sinh</th>
            <th>SDT</th>
            <th>Dia chi</th>
        </tr>
        <?php foreach ($customer_list as $key=>$customer):?>
        <tr>
            <td><?php echo $key?></td>
            <td><?php echo $customer['name']?></td>
            <td><?php echo $customer['birth']?></td>
            <td><?php echo $customer['phone']?></td>
            <td><?php echo $customer['address']?></td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>
<?php

