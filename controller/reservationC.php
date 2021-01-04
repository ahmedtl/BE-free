<?PHP
	include "../config.php";
	require_once '../Model/reservation.php';
	global $db;
	class reservationC {
		
		function ajouterreservation($reservation){
			$prix=55;
			if(isset($_POST['C1'])) $prix+=25;
			if(isset($_POST['C2'])) $prix+=15;
			if(isset($_POST['C3'])) $prix+=12;
			
			$sql="INSERT INTO reservation (Ncin, depart, destination, prix, date_res ) 
			VALUES (:Ncin, :depart, :destination ,:prix,:date_res )";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'Ncin' => $reservation->getNcin(),
					'depart' => $reservation->getdepart(),
					'destination' => $reservation->getdestination(),
					'prix' =>$prix ,
					'date_res' => $reservation->getdate_res()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}	
		
		$sql="INSERT INTO payement (Ncin,prix ) 
			VALUES (:Ncin,:prix )";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'Ncin' => $reservation->getNcin(),
					
					'prix' =>$prix 
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}	return $prix;		
		}
	
		function supprimerUtilisateur($Ncin){
			$sql="DELETE FROM reservation WHERE Ncin= :Ncin";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':Ncin',$Ncin);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function afficherUtilisateurs(){
			
			$sql="SELECT * FROM reservation";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
	}
		?>