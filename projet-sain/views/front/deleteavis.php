
<?PHP
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
include "../../core/avisC.php";
$avisC=new avisC();
if (isset($_GET["idc"])){
	$avisC->supprimeravis($_GET["idc"]);
    header('Location:forum.php');
}

?>