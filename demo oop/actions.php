<?php
function addCustomer($list, $array){
    array_push($list, $array);
    saveData($list);
}

function saveData($data){
    $dataJson= json_encode($data);
    file_put_contents("data.json", $dataJson);
}

function loadData(){
    $data = file_get_contents("data.json");
    return json_decode($data, true);
}