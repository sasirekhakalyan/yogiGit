<?php
require_once 'pg_connection.php';
// DB table to use
$table = 'datatables_demo';

// Table's primary key
$primaryKey = 'id';
$result = pg_query($db,"SELECT first_name,last_name FROM cnrm_clinical_trial_referral");

while($row = pg_fetch_assoc($result))
{
    $data[] = $row;
}

if(isset($data))
{
    header('Content-Type: application/json');
    echo json_encode($data); 
}
?>