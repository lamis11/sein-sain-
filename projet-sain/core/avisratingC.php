<?PHP

class avisratingC {
	function ajouterrating ($rating){
		$sql="insert into avisrating (id_client,idavis,rating) values (:id_client,:idavis,:rating)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		

        $id_client=$rating->getid_client();
        $idavis=$rating->getidavis();
        $r=$rating->getrating();

		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':idavis',$idavis);
		$req->bindValue(':rating',$r);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
    }
    
    function checkvoted($id_client,$idavis){
        $sql="SElECT * From avisrating WHERE id_client = $id_client and idavis = $idavis ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
	
	function afficherratings(){
		$sql="SElECT * From avisrating";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


    function calculeRating1($idavis){
		$sql="SElECT * From avisrating where rating=1 and idavis=$idavis";
		$db = config::getConnexion();
		try{
        $liste=$db->query($sql);
        $count=0;
        foreach($liste as $row){
            $count++;
        }
		return $count;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    function calculeRating0($idavis){
		$sql="SElECT * From avisrating where rating=0 and idavis=$idavis";
		$db = config::getConnexion();
		try{
        $liste=$db->query($sql);
        $count=0;
        foreach($liste as $row){
            $count++;
        }
		return $count;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    
	function supprimerrating($pid){
		$sql="DELETE FROM avisrating where pid= :pid";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':pid',$pid);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierratingto0($idr){
		$sql="UPDATE avisrating SET rating=0 WHERE idar=$idr";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
    }
    function modifierratingto1($idr){
		$sql="UPDATE avisrating SET rating=1 WHERE idar=$idr";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}
	
	function recupererrating($pid){
		$sql="SELECT * from avisrating where pid=$pid";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListerating($pid){
		$sql="SELECT * from avisrating where pid=$pid";
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