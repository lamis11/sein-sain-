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
class diseaseC{

function addDisease($disease){
        
        $sql="insert into disease (id, patientId, doctor, department, facility, pathology, diagnosis, stayDate, endDate, state, notes) values (:id, :patientId, :doctor, :department, :facility, :pathology, :diagnosis, :stayDate, :endDate, :state, :notes)";
        $db = config::getConnexion();
        try{
        //$db->prepare prépare la requète sql à l'affectation des données avec bindvalue
        $req=$db->prepare($sql);
        //On utilise les getters car les attributs des classes sont de type private
        $id=$disease->get_id();
        $patientId=$disease->get_patientId(); 
        $doctor=$disease->get_doctor(); 
        $department=$disease->get_department(); 
        $facility=$disease->get_facility(); 
        $pathology=$disease->get_pathology(); 
        $diagnosis=$disease->get_diagnosis(); 
        $stayDate=$disease->get_stayDate(); 
        $endDate=$disease->get_endDate(); 
        $state=$disease->get_state(); 
        $notes=$disease->get_notes();
         
    

        //On utilise bindValue pour éviter la faille de sécurité SQL Injection !!!!!! IMPORTANT !!!!!!! Question fréquente
        $req->bindValue(':id',$id);
        $req->bindValue(':patientId',$patientId);
        $req->bindValue(':doctor',$doctor);
        $req->bindValue(':department',$department);
        $req->bindValue(':facility',$facility);
        $req->bindValue(':pathology',$pathology);
        $req->bindValue(':diagnosis',$diagnosis);
        $req->bindValue(':stayDate',$stayDate);
        $req->bindValue(':endDate',$endDate);
        $req->bindValue(':state',$state);
        $req->bindValue(':notes',$notes);

        
        
        
        //$req->execute() execute la requête
            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

      }
      
    function retrieveDiseaseById($id){

        $sql="SELECT * From disease where patientId='$id'";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
       function retrieveDiseaseByDiseaseId($id){

        $sql="SELECT * From disease where id='$id'";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    
    function treat($id){
         $sql="UPDATE disease SET state = 'En cours de traitement' where id='$id'";
         $db = config::getConnexion();
        try{
       $db->query($sql);
            }
         catch (Exception $e){
         die('Erreur: '.$e->getMessage());
        }
    }
     function treated($id,$endDate){
         $sql="UPDATE disease SET state = 'Traite', endDate='$endDate' where id='$id'";
         $db = config::getConnexion();
        try{
       $db->query($sql);
            }
         catch (Exception $e){
         die('Erreur: '.$e->getMessage());
        }
    }
         function addNote($id,$note){
         $sql="UPDATE disease SET notes='$note' where id='$id'";
         $db = config::getConnexion();
        try{
       $db->query($sql);
            }
         catch (Exception $e){
         die('Erreur: '.$e->getMessage());
        }
    }
function getLatestDesease($id){

        $sql="SELECT * From disease where patientId='$id' ORDER BY stayDate DESC LIMIT 1 ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }   
    function giveRDV($id,$stayDate,$doctor,$department,$facility){
         $sql="UPDATE disease SET state = 'RDV attribue', stayDate='$stayDate', doctor='$doctor', department='$department', facility='$facility' where id='$id'";
         $db = config::getConnexion();
        try{
       $db->query($sql);
            }
         catch (Exception $e){
         die('Erreur: '.$e->getMessage());
        }
    }
           function forward($id,$pathology,$diagnosis,$notes){
         $sql="UPDATE disease SET state = 'Admis',  pathology='$pathology', notes='$notes',  diagnosis='$diagnosis' where id='$id'";
         $db = config::getConnexion();
        try{
       $db->query($sql);
            }
         catch (Exception $e){
         die('Erreur: '.$e->getMessage());
        }
    }
    function refuseBooking($id){
         $sql="DELETE FROM `disease` WHERE id = $id";
         $db = config::getConnexion();
        try{
       $db->query($sql);
            }
         catch (Exception $e){
         die('Erreur: '.$e->getMessage());
        }
    }

}
 ?>
