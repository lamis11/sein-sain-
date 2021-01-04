<?PHP
class don{
	private $id;
	private $nom;
	private $prenom;
    private $date;
    private $somme;
	function __construct($nom,$prenom,$date,$somme){
		$this->nom=$nom;
		$this->prenom=$prenom;
        $this->date=$date;
        $this->somme=$somme;	
		
	}
	
	function getid(){
		return $this->id;
	}
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
	}
	function getdate(){
		return $this->date;
    }
    function getsomme(){
		return $this->somme;
	}


	function setid($id){
		$this->id=$id;
	}
	function setnom($nom){
		$this->nom=$nom;
	}
	function setprenom($prenom){
		$this->prenom=$prenom;
	}
	function setdate($date){
		$this->date=$date;
    }
    function setsomme($somme){
		$this->somme=$somme;
	}
	
}

?>