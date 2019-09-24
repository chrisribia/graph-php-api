<?php 

require_once '../includes/DbOperations.php';

$response_data = array(); 

if ($_SERVER['REQUEST_METHOD']=='GET') {
    $db = new DbOperations;
    $tickets = $db->getAllEmployess();
    if (!$tickets == null) 
    {
        $response_data['error'] = false; 
         $Events = array();
         $Event = array();
       
        $response_data['employee'] = $tickets;
    }
}
echo json_encode($response_data);