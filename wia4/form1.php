<?php
$button = (int)$_POST['button'];

function liczSilnie($num){
    if($num <2) return 1;
    else return $num*liczSilnie($num -1);
}

function potegaDwojki($num){

    if ($num > 0){
        return potegaDwojki($num - 1) * 2;
    }
    else return 1;

}



    $num = (int)$_POST['num'];

    if( 0 <= $num && 50 >= $num ){
        switch($button){
            case 1:
                echo liczSilnie($num);
                break;
            case 2:
                echo potegaDwojki($num);
                break;
            default:
                break;
        }
    }
    else echo "Liczba nie mieści się w zakresie";
