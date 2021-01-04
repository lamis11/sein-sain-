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
class patientC{

function addPatient($patient){
        
        $sql="insert into patient (id,civility,name,surname,gender,birthDay,birthPlace,marital,profession,adress,postal,city,phone) values (:id,:civility,:name,:surname,:gender,:birthDay,:birthPlace,:marital,:profession,:adress,:postal,:city,:phone)";
        $db = config::getConnexion();
        try{
        //$db->prepare prépare la requète sql à l'affectation des données avec bindvalue
        $req=$db->prepare($sql);
        //On utilise les getters car les attributs des classes sont de type private
        $id=$patient->get_id();
        $civility=$patient->get_civility();
        $name=$patient->get_name();
        $surname=$patient->get_surname();
        $gender=$patient->get_gender();
        $birthDay=$patient->get_birthDay(); 
        $birthPlace=$patient->get_birthPlace(); 
        $marital=$patient->get_profession(); 
        $profession=$patient->get_marital(); 
        $adress=$patient->get_adress(); 
        $postal=$patient->get_postal(); 
        $city=$patient->get_city(); 
        $phone=$patient->get_phone();        
         
    

        //On utilise bindValue pour éviter la faille de sécurité SQL Injection !!!!!! IMPORTANT !!!!!!! Question fréquente
        $req->bindValue(':id',$id);
        $req->bindValue(':civility',$civility);
        $req->bindValue(':name',$name);
        $req->bindValue(':surname',$surname);
        $req->bindValue(':gender',$gender);
        $req->bindValue(':birthDay',$birthDay);
        $req->bindValue(':birthPlace',$birthPlace);
        $req->bindValue(':marital',$marital);
        $req->bindValue(':profession',$profession);
        $req->bindValue(':adress',$adress);
        $req->bindValue(':postal',$postal);
        $req->bindValue(':city',$city);
        $req->bindValue(':phone',$phone);
        
        
        
        //$req->execute() execute la requête
            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

      }
      function retrievePatients(){

        $sql="SELECT * From patient";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function retrievePatientById($id){

        $sql="SELECT * From patient WHERE id='$id'";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function deletePatient($id){
        $sql="DELETE FROM `patient` WHERE `id` = '$id'";
            $db = config::getConnexion();
        try{
       $db->query($sql);
            }
         catch (Exception $e){
         die('Erreur: '.$e->getMessage());
        }
    }
        function updatePatient($id,$marital,$profession,$adress,$postal,$city,$phone){
        $sql="UPDATE patient SET marital='$marital', profession='$profession', adress='$adress', postal='$postal', city='$city', phone='$phone' where id='$id'";
         $db = config::getConnexion();
        try{
       $db->query($sql);
            }
         catch (Exception $e){
         die('Erreur: '.$e->getMessage());
        }
    }
    function exist($name,$surname,$birthDay){

        $sql="SELECT * From patient WHERE name='$name' AND surname='$surname' AND birthDay='$birthDay'";
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
