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
    <input type="text" name="inputData">
    <input type="submit" value="Submit">
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $array = loadData();
    $data = $_POST["inputData"];

    array_push($array, $data);
    // Trước khi save tạo file và cấp quyền = sudo chmod -R 777 .
    saveData($array);
    echo "<pre>";
    var_dump($array);
}

function saveData($data){
    $jsonData = json_encode($data);
    file_put_contents("data.json", $jsonData);
}

function loadData(){
    $data = file_get_contents("data.json");
    return json_decode($data);
}
