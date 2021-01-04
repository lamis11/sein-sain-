<?php

 class config {
    private static $instance = NULL;

    public static function getConnexion() {
      if (!isset(self::$instance)) {
		try{
        self::$instance = new PDO('mysql:host=localhost;dbname=projet_sain', 'root', '');
		self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
            die('Erreur: '.$e->getMessage());
		}
      }
      return self::$instance;
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

$nbr_places=$event->getnbr_places() + 1;
$event->set_nbr_places($nbr_places);

modifierevent($event,$id);



		return $event;
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

$nbr_places=$event->getnbr_places() - 1;
$event->set_nbr_places($nbr_places);

modifierevent($event,$id);



		return $event;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }		

		
	
}


?>