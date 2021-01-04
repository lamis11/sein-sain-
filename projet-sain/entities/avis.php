<?PHP
class avis{
	private $idc;
    private $id_client;
	private $cmt;
	private $stars;

	function __construct($id_client,$cmt,$stars){

		$this->id_client=$id_client;
		$this->cmt=$cmt;	
		$this->stars=$stars;
	}
	
	function getidc(){
		return $this->idc;
	}

	function getid_client(){
		return $this->id_client;
	}
	function getcmt(){
		return $this->cmt;
	}
	function getstars(){
		return $this->stars;
    }



	function setidc($idc){
		$this->idc=$idc;
	}

	function setid_client($id_client){
		$this->id_client=$id_client;
	}
	function setcmt($cmt){
		$this->cmt=$cmt;
    }

}

?>