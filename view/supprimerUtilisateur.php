<?PHP
	include "../controller/reservationC.php";

	$reservationC=new reservationC();
	
	if (isset($_POST["Ncin"])){
		$reservationC->supprimerUtilisateur($_POST["Ncin"]);
		
	}

?>