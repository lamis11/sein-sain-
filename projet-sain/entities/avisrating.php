<?PHP
class avisrating{
	private $idar;
	private $id_client;
	private $idavis;
	private $rating;
	function __construct($id_client,$idavis,$rating){	
		$this->id_client=$id_client;
		$this->idavis=$idavis;
		$this->rating=$rating;
		
	}
	
	function getidar(){
		return $this->idar;
	}
	function getid_client(){
		return $this->id_client;
	}
	function getidavis(){
		return $this->idavis;
	}
	function getrating(){
		return $this->rating;
	}


	function setidar($idar){
		$this->idar=$idar;
	}
	function setid_client($id_client){
		$this->id_client=$id_client;
	}
	function setidavis($idavis){
		$this->idavis=$idavis;
	}
	function setrating($rating){
		$this->rating=$rating;
	}
    
}

?>