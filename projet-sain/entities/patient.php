<?php  
class patient
{
	private $id;
	private $civility;
	private $name;
	private $surname;
	private $gender;
	private $birthDay;
	private $birthPlace;
	private $marital;
	private $profession;
	private $adress;
	private $postal;
	private $city;
	private $phone;
	
	
		function __construct($id, $civility, $name, $surname, $gender, $birthDay, $birthPlace, $marital, $profession, $adress, $postal, $city, $phone)
		{
			$this->id=$id;
			$this->civility=$civility;
			$this->name=$name;
			$this->surname=$surname;
			$this->gender=$gender;
			$this->birthDay=$birthDay;
			$this->birthPlace=$birthPlace;
			$this->marital=$marital;
			$this->profession=$profession;
			$this->adress=$adress;
			$this->postal=$postal;
			$this->city=$city;
			$this->phone=$phone;
		}

		function get_id()
		{	
			return $this->id;
		}
		function get_name()
		{	
			return $this->name;
		}
		function get_surname()
		{	
			return $this->surname;
		}
		function get_civility()
		{	
			return $this->civility;
		}
		function get_gender()
		{	
			return $this->gender;
		}
		function get_birthDay()
		{	
			return $this->birthDay;
		}
		function get_birthPlace()
		{	
			return $this->birthPlace;
		}
		function get_profession()
		{	
			return $this->profession;
		}
		function get_marital()
		{	
			return $this->marital;
		}
		function get_adress()
		{	
			return $this->adress;
		}
		function get_postal()
		{	
			return $this->postal;
		}
		function get_city()
		{	
			return $this->city;
		}
		function get_phone()
		{	
			return $this->phone;
		}
}




?>