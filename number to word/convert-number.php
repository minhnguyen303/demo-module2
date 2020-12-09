<?php
function convertOneNum($num)
{
    $array = ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];
    return $array[$num];
}

function convertTwoNum($num)
{
    $teen = [10 => "ten", 11 => "eleven", 12 => "twelve", 13 => "thirteen", 14 => "fourteen", 15 => "fifteen", 16 => "sixteen", 17 => "seventeen", 18 => "eighteen", 19 => "nineteen"];
    $ty = [2 => "twenty", 3 => "thirty", 4 => "fourty", 5 => "fifty", 6 => "sixty", 7 => "seventy", 8 => "eighty", 9 => "ninety"];

    if ($num < 20){
        return $teen[$num];
    }
    else {
        if ($num[1] == 0){
            return $ty[$num[0]];
        }
        else{
            return $ty[$num[0]] . " " . convertOneNum($num[1]);
        }
    }
}

function convertThreeNum($num){
    if (($num % 100) == 0){
        return convertOneNum($num[0]) . " hundred";
    }
    if ($num[1] == 0){
        return convertOneNum($num[0]) . " hundred and " . convertOneNum($num[2]);
    }
    return convertOneNum($num[0]) . " hundred and " . convertTwoNum($num[1] . $num[2]);
}

function convertToWord($num){
    $result = '';
    switch (strlen($num)){
        case 1:
            $result = convertOneNum($num);
            break;
        case 2:
            $result = convertTwoNum($num);
            break;
        case 3:
            $result = convertThreeNum($num);
            break;
        default:
            $result = "Cái này không biết !!!";
    }
    return $result;
}