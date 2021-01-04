<?PHP




include "../../core/ParticipationC.php";
include "../../entities/participation.php";
include "../../core/EventC2.php";


if (isset($_POST["id"])){



	$ParticipationC=new ParticipationC();
	$EventC=new EventC();


		$result = $ParticipationC->recupererparticipation_user($_POST["id"]);


    foreach($result as $row){

         $id_event=$row->id_event;
       
    }

		$EventC->incrementerevent($id_event);
	$ParticipationC->Supprimerparticipation_user($_POST["id"]);


header('Location: AfficherEvent.php');
}

?>