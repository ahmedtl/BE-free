<?php
    
	  include_once '../Model/reservation.php';
    include_once '../Controller/reservationC.php';

    // create reservation
    $reservation = null;

    // create an instance of the controller
    $reservationC = new reservationC();
    if (
        isset($_POST["Ncin"]) && 
        isset($_POST["depart"]) &&
        isset($_POST["destination"]) &&
        isset($_POST["date_res"])
    ) {
        if (
            !empty($_POST["Ncin"]) && 
            !empty($_POST["depart"]) && 
            !empty($_POST["destination"]) &&
            !empty($_POST["date_res"])
        ) {
            $reservation = new reservation(
                $_POST['Ncin'],
                $_POST['depart'],
                $_POST['destination'] ,
                $_POST['date_res']
            );
        }
        else
            $error = "Missing information";
    }
            $prix = $reservationC->ajouterreservation($reservation);
           // location
           
           echo 'payement reuusit prix: ' . $prix;

    
?>
