<?php 
/**
 * 
 */
class categorie 
{


	private $id_categorie;
	private $nom;
	
	function __construct($id_categorie,$nom)
	{
		$this->id_categorie=$id_categorie;
		$this->nom=$nom;

	}
	
	function getid_categorie(){return $this->id_categorie;}
	function getnom(){return $this->nom;}	

	public function set_id_categorie($id_categorie)
		{
			$this->id_categorie = $id_categorie;
		}
	public function set_nom($nom)
		{
			$this->nom = $nom;
		}		
	
		
}
 ?>
