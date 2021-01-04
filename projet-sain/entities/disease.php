<?php  
class disease
{
	private $id;
	private $patientId;
	private $doctor;
	private $department;
	private $facility;
	private $pathology;
	private $diagnosis;
	private $stayDate;
	private $endDate;
	private $state;
	private $notes;

	
	
		function __construct($id, $patientId, $doctor, $department, $facility, $pathology, $diagnosis, $stayDate, $endDate, $state, $notes)
		{
			$this->id=$id;
			$this->patientId=$patientId;
			$this->doctor=$doctor;
			$this->department=$department;
			$this->facility=$facility;
			$this->pathology=$pathology;
			$this->diagnosis=$diagnosis;
			$this->stayDate=$stayDate;
			$this->endDate=$endDate;
			$this->state=$state;
			$this->notes=$notes;
		}

		function get_id()
		{	
			return $this->id;
		}
		function get_patientId()
		{	
			return $this->patientId;
		}
		function get_doctor()
		{	
			return $this->doctor;
		}
		function get_department()
		{	
			return $this->department;
		}
		function get_facility()
		{	
			return $this->facility;
		}
		function get_pathology()
		{	
			return $this->pathology;
		}
		function get_diagnosis()
		{	
			return $this->diagnosis;
		}
		function get_stayDate()
		{	
			return $this->stayDate;
		}
		function get_endDate()
		{	
			return $this->endDate;
		}
		function get_state()
		{	
			return $this->state;
		}
		function get_notes()
		{	
			return $this->notes;
		}
}




?>