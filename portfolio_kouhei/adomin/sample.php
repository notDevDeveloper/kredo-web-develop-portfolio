<?php

    require '../classes/customer.php';

    $reservation_check_in = '2019-05-15';
    $date_today = date('Y-m-d');

    $reservation = new Reservation;

    $check = $reservation->checkPastDate($date_today,$reservation_check_in);
    if($check < 0){
        echo "Can't book";
    }else{
        echo "Can book";
    }
    



?>