<?php 
/**
 * 
 */
class event 
{


	private $id_event;
	private $titre;
	private $description;
		private $image;
	private $emplacement;
	private $nom_categorie;
	private $date_debut;
	private $date_fin;
		private $places;
	
	function __construct($id_event,$titre,$description,$image,$emplacement,$nom_categorie,$date_debut,$date_fin,$places)
	{
		$this->id_event=$id_event;
		$this->titre=$titre;
		$this->description=$description;
		$this->image=$image;
		$this->emplacement=$emplacement;
		$this->nom_categorie=$nom_categorie;
		$this->date_debut=$date_debut;
		$this->date_fin=$date_fin;
			$this->places=$places;
	}
	
	function getid_event(){return $this->id_event;}
	function gettitre(){return $this->titre;}
	function getdescription(){return $this->description;}
	function getimage(){return $this->image;}
	function getemplacement(){return $this->emplacement;}
	function getnom_categorie(){return $this->nom_categorie;}
	function getdate_debut(){return $this->date_debut;}
	function getdate_fin(){return $this->date_fin;}	
	function getplaces(){return $this->places;}		

	public function set_id_event($id_event)
		{
			$this->id_event = $id_event;
		}
	public function set_titre($titre)
		{
			$this->titre = $titre;
		}		
	public function set_description($description)
		{
			$this->description = $description;
		}	
	public function set_image($image)
		{
			$this->image = $image;
		}
	public function set_emplacement($emplacement)
		{
			$this->emplacement = $emplacement;
		}
	public function set_nom_categorie($nom_categorie)
		{
			$this->nom_categorie = $nom_categorie;
		}
	public function set_date_debut($date_debut)
		{
			$this->date_debut = $date_debut;
		}	
	public function set_date_fin($date_fin)
		{
			$this->date_fin = $date_fin;
		}			
	public function set_places($places)
		{
			$this->places = $places;
		}		
		
}
 ?>
