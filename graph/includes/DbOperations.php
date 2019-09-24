<?php 

	class DbOperations{

		private $con; 

		function __construct(){

			require_once dirname(__FILE__).'/DbConnect.php';

			$db = new DbConnect();

			$this->con = $db->connect();

		}

		/*CRUD -> C -> CREATE */
		
 
	 
	 

		public function getAllEmployess(){
            $stmt = $this->con->prepare("SELECT id,name, designation,city,joiningDate,salary FROM employee ");
            $stmt->execute(); 
			$stmt->bind_result($id,$name,$designation, $city, $joiningDate,$salary);
			 
            $tickets = array(); 
            while($stmt->fetch()){ 
                $ticket = array(); 
				$ticket['id'] = $id; 
				$ticket['name']=$name; 
				$ticket['designation']=$designation;  
				$ticket['joiningDate'] = $joiningDate;                
				$ticket['city'] = $city; 
				$ticket['salary'] = $salary; 
                array_push($tickets, $ticket);
			}             
			return $tickets; 
		 
		}
		
		
 
 
	}