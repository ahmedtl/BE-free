<?PHP
include "../../core/FormC.php";
include ".../../entities/form.php";



if (isset($_POST["id"])){
	$FormC=new FormC();
	$FormC->Supprimerform($_POST["id"]);


header('Location: AfficherForms.php');
}

?>