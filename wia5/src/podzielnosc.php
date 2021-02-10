<?php
$num = $_POST['num'];
$dzielnik = (int)$_POST['button'];

switch($dzielnik){
    case 2:
        przez2($num);
        break;
    case 3:
        przez3($num);
        break;
    case 4:
        przez4($num);
        break;
    case 5:
        przez5($num);
        break;
    case 6:
        przez6($num);
        break;
    case 7:
        przez7($num);
        break;
    case 8:
        przez8($num);
        break;
    case 9:
        przez9($num);
        break;
    case 10:
        przez10($num);
        break;


}
function przez2($num){
    $lastDigit = (string)$num[strlen((string)$num)-1];

    if ((int)$lastDigit % 2 === 0){
        echo 'Jest podzielne przez 2';
    }
    else {
        echo 'Nie jest podzielne przez 2';
    }
}

function przez3($num){
    $sum=0;
    $rem=0;
    for ($i =0; $i<=strlen((string)$num);$i++)
    {
        $rem=$num%10;
        $sum = $sum + $rem;
        $num=$num/10;
    }
    if ($sum % 3 === 0){
        echo 'Jest podzielne przez 3';
    }
    else {
        echo 'Nie jest podzielne przez 3';
    }
}

function przez4($num){
    $lastDigit = (string)$num[strlen((string)$num)-1];

    if ((int)$lastDigit % 4 === 0){
        echo 'Jest podzielne przez 4';
    }
    else {
        echo 'Nie jest podzielne przez 4';
    }
}

function przez5($num){
    if ($num > 0){
        $lastDigit = (string)$num[strlen((string)$num)-1];
        if($lastDigit === '5' || $lastDigit === '0'){
            echo 'Jest podzielne przez 5';
        }
        else {
            echo 'Nie jest podzielne przez 5';
        }
    }
    else {
        echo 'Nie jest podzielne przez 5';
    }
}

function przez6($num){
    $lastDigit = (string)$num[strlen((string)$num)-1];

    if ((int)$lastDigit % 2 === 0){
        $sum=0;
        $rem=0;
        for ($i =0; $i<=strlen((string)$num);$i++)
        {
            $rem=$num%10;
            $sum = $sum + $rem;
            $num=$num/10;
        }
        if ($sum % 3 === 0){
            echo 'Jest podzielne przez 6';
        }
        else {
            echo 'Nie jest podzielne przez 6';
        }
    }
    else {
        echo 'Nie jest podzielne przez 6';
    }
}

function przez7($num){

    $number = $num;
    $leftovers = 0;

    while($number != 0){
        $last2Digits = substr((string)$number, -2);
        $leftPart = str_replace($last2Digits, "", (string)$number);
        $leftovers += $last2Digits % 7;
        $number = (int)$leftPart * 2;
    }
    echo $leftovers;
    if ($leftovers % 7 === 0){
        echo 'Jest podzielne przez 7';
    }
    else {
        echo 'Nie jest podzielne przez 7';
    }

}

function przez8($num){
    $last3Digits = substr((string)$num, -3);
    if((int)$last3Digits % 8 === 0){
        echo 'Jest podzielne przez 8';
    }
    else {
        echo 'Nie jest podzielne przez 8';
    }
}

function przez9($num){
    $sum=0;
    $rem=0;
    for ($i =0; $i<=strlen((string)$num);$i++)
    {
        $rem=$num%10;
        $sum = $sum + $rem;
        $num=$num/10;
    }
    if ($sum % 9 === 0){
        echo 'Jest podzielne przez 9';
    }
    else {
        echo 'Nie jest podzielne przez 9';
    }
}

function przez10($num){
    if ($num > 0){
        $lastDigit = (string)$num[strlen((string)$num)-1];
        if($lastDigit === '0'){
            echo 'Jest podzielne przez 10';
        }
        else {
            echo 'Nie jest podzielne przez 10';
        }
    }
    else{
        echo 'Nie jest podzielne przez 10';
    }
}