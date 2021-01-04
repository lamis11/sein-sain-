<?PHP


class reponseC {


	function ajouterreponse ($reponse){
        
		$sql="insert into reponse (id_client,idc,rep) values (:id_client,:idc,:rep)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
     
        $id_client=$reponse->getid_client();
        $idc=$reponse->getidc();
        $rep=$reponse->getrep();
		
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':idc',$idc);
        $req->bindValue(':rep',$rep);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function calculerreplay($idc){

		$sql="SElECT * From reponse where idc=$idc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		$i=0;
			foreach($liste as $row){
				$i++;
			}
			return $i;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	

	}

	function getname($id_client){
		$sql="SELECT * From user where id_client =$id_client  ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		foreach($liste as $row){
			$name=$row['nom'];
			
		}
		return $name;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function afficherreponses($idc){
		//$sql="SElECT * From idc e inner join formationphp.idc a on e.id= a.id";
		$sql="SElECT * From reponse where idc=$idc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerreponse($id){
		$sql="DELETE FROM reponse where idr= :idr";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idr',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierreponse($reponse,$id){
		$sql="UPATE reponse SET rep=:rep WHERE idr=:idr";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);

        $sommme=$reponse->getrep();

		$req->bindValue(':idr',$id);
		$req->bindValue(':rep',$sommme);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}
	function recupererreponse($id){
		$sql="SELECT * from reponse where idr=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListereponses($id){
		$sql="SELECT * from reponse where idr=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>