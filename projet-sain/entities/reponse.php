<?PHP
class reponse{
	private $idr;
	private $id_client;
	private $idc;
    private $rep;

	function __construct($id_client,$idc,$rep){
		$this->id_client=$id_client;
		$this->idc=$idc;
        $this->rep=$rep;
	}
	
	function getidr(){
		return $this->idr;
	}
	function getid_client(){
		return $this->id_client;
	}
	function getidc(){
		return $this->idc;
	}
	function getrep(){
		return $this->rep;
    }

	function setidr($idr){
		$this->idr=$idr;
	}
	function setid_client($id_client){
		$this->id_client=$id_client;
	}
	function setidc($idc){
		$this->idc=$idc;
	}
	function setrep($rep){
		$this->rep=$rep;
    }
	
}

?>