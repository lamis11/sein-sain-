<?php 
/**
 * 
 */
class participation 
{

	private $id;
	private $id_User;

	private $id_event;
	
	function __construct($id,$id_event,$id_User)
	{
		$this->id=$id;
		$this->id_event=$id_event;
			$this->id_User=$id_User;
	}
	
	function getid(){return $this->id;}
			function getid_User(){return $this->id_User;}
				function getid_event(){return $this->id_event;}
	public function set_id($id)
		{
			$this->id = $id;
		}
			public function set_id_event($id_event)
		{
			$this->id_event = $id_event;
		}
					public function set_id_User($id_User)
		{
			$this->id_User = $id_User;
		}

}
 ?>
