<?php 

include '../../entities/form.php';
include '../../core/FormC2.php';
include '../../entities/likes.php';
include '../../core/LikesC.php';


if( isset($_POST['id'])  )
{
session_start();
	$likes = new likes(0,$_POST['id'],$_SESSION['id']);
	
	$LikesC=new LikesC();
	$LikesC->ajouterLikes($likes);

		$FormC=new FormC();
	$FormC->incrementerlike($_POST['id']);
	header('Location: AfficherForms.php');
}
else{
	echo "verifier les champs";
}

 ?>