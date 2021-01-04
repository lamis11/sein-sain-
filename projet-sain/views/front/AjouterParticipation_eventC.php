<?php 



include '../../entities/participation.php';
include '../../core/ParticipationC.php';
include "../../core/EventC2.php";


if(isset($_POST['id_event'])  )
{
session_start();
	
$participer = new participation(0,$_POST['id_event'],$_SESSION['id']);
	$EventC2=new EventC();


		$EventC2->decrmenterevent($_POST['id_event']);
	$ParticipationC=new ParticipationC();
	$ParticipationC->participerEvent($participer);
	header('Location: AfficherEvent.php');
}
else{
	echo "verifier les champs";
}

 ?>