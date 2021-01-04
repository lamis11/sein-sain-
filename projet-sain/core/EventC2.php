<?php

class event 
{


	private $id_event;
	private $titre;
	private $description;
		private $image;
	private $emplacement;
	private $nom_categorie;
	private $date_debut;
	private $date_fin;
		private $places;
	
	function __construct($id_event,$titre,$description,$image,$emplacement,$nom_categorie,$date_debut,$date_fin,$places)
	{
		$this->id_event=$id_event;
		$this->titre=$titre;
		$this->description=$description;
		$this->image=$image;
		$this->emplacement=$emplacement;
		$this->nom_categorie=$nom_categorie;
		$this->date_debut=$date_debut;
		$this->date_fin=$date_fin;
			$this->places=$places;
	}
	
	function getid_event(){return $this->id_event;}
	function gettitre(){return $this->titre;}
	function getdescription(){return $this->description;}
	function getimage(){return $this->image;}
	function getemplacement(){return $this->emplacement;}
	function getnom_categorie(){return $this->nom_categorie;}
	function getdate_debut(){return $this->date_debut;}
	function getdate_fin(){return $this->date_fin;}	
	function getplaces(){return $this->places;}		

	public function set_id_event($id_event)
		{
			$this->id_event = $id_event;
		}
	public function set_titre($titre)
		{
			$this->titre = $titre;
		}		
	public function set_description($description)
		{
			$this->description = $description;
		}	
	public function set_image($image)
		{
			$this->image = $image;
		}
	public function set_emplacement($emplacement)
		{
			$this->emplacement = $emplacement;
		}
	public function set_nom_categorie($nom_categorie)
		{
			$this->nom_categorie = $nom_categorie;
		}
	public function set_date_debut($date_debut)
		{
			$this->date_debut = $date_debut;
		}	
	public function set_date_fin($date_fin)
		{
			$this->date_fin = $date_fin;
		}			
	public function set_places($places)
		{
			$this->places = $places;
		}		
		
}

class  eventC{
	


	function ajouterevent($event)
	{

 	$sql="INSERT INTO `event`( `titre`, `description`, `image`, `emplacement`, `nom_categorie`, `date_debut`, `date_fin`, `places`) VALUES (:titre,:description,:image,:emplacement,:nom_categorie,:date_debut,:date_fin,:places)";
 	$db = config::getConnexion();
 		try{
		$req=$db->prepare($sql);		
	
  		 		$titre=$event->gettitre();
  		 		$description=$event->getdescription();
$image=$event->getimage();
	$emplacement=$event->getemplacement();
	$nom_categorie=$event->getnom_categorie();
		$date_debut=$event->getdate_debut();
			$date_fin=$event->getdate_fin();
				$places=$event->getplaces();
		$req->bindValue(':titre',$titre);
		$req->bindValue(':description',$description);
		$req->bindValue(':image',$image);
		$req->bindValue(':emplacement',$emplacement);
			$req->bindValue(':nom_categorie',$nom_categorie);
				$req->bindValue(':date_debut',$date_debut);
					$req->bindValue(':date_fin',$date_fin);
					$req->bindValue(':places',$places);
            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}
	    function afficherlist_event(){

		$sql="SElECT * From event";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
function modifierevent($event,$id)
	{
 	$db = config::getConnexion();
 	$sql="UPDATE `event` SET `titre`=:titre,`description`=:description,`image`=:image,`emplacement`=:emplacement,`nom_categorie`=:nom_categorie,`date_debut`=:date_debut,`date_fin`=:date_fin,`places`=:places WHERE `id_event`=:id";
 		try{

        $req=$db->prepare($sql);		

	$titre=$event->gettitre();
  		 		$description=$event->getdescription();
$image=$event->getimage();
	$emplacement=$event->getemplacement();
	$nom_categorie=$event->getnom_categorie();
		$date_debut=$event->getdate_debut();
			$date_fin=$event->getdate_fin();
				$places=$event->getplaces();
		$req->bindValue(':titre',$titre);
		$req->bindValue(':description',$description);
		$req->bindValue(':image',$image);
		$req->bindValue(':emplacement',$emplacement);
			$req->bindValue(':nom_categorie',$nom_categorie);
				$req->bindValue(':date_debut',$date_debut);
					$req->bindValue(':date_fin',$date_fin);
					$req->bindValue(':places',$places);
  
			$req->bindValue(':id',$id);		

            $req->execute();
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}



		function recupererevent($id){
		$sql="SELECT * FROM `event` WHERE  id_event=:id ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':id',$id);
 	    $req->execute();
 		$event= $req->fetchALL(PDO::FETCH_OBJ);
		return $event;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
        function Supprimerevent($id){
		$sql="DELETE  from event where  id_event=:id ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
 	    $req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
		function incrementerevent($id){
		$sql="SELECT * FROM `event` WHERE  id_event=:id ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':id',$id);
 	    $req->execute();
 		$event= $req->fetchALL(PDO::FETCH_OBJ);

$places=$event[0]->places + 1;
var_dump($places); 
$eveennt=$event[0];
$newevent = new event(0,$eveennt->titre,$eveennt->description,$eveennt->image,$eveennt->emplacement,$eveennt->nom_categorie,$eveennt->date_debut,$eveennt->date_fin,$places);

$this->modifierevent($newevent,$id);



		return $newevent;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
		function decrmenterevent($id){
		$sql="SELECT * FROM `event` WHERE  id_event=:id ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':id',$id);
 	    $req->execute();
 		$event= $req->fetchALL(PDO::FETCH_OBJ);

$places=$event[0]->places - 1;

$eveennt=$event[0];
$newevent = new event(0,$eveennt->titre,$eveennt->description,$eveennt->image,$eveennt->emplacement,$eveennt->nom_categorie,$eveennt->date_debut,$eveennt->date_fin,$places);

$this->modifierevent($newevent,$id);



		return $newevent;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }		
		
	
}


?>