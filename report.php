<?php
require_once 'pg_connection.php';
$result = pg_query($db,"SELECT subject_id,first_name,middle_name,last_name FROM cnrm_clinical_trial_referral");
$data = array();   
while($row = pg_fetch_assoc($result))
{
    $data[] = array(
        "subject_id" => $row["subject_id"],
        "first_name" => $row["first_name"],
        "middle_name" => $row["middle_name"],
        "last_name" => $row["last_name"]
       
    );
}
//if(isset($data))
//{
    header('Content-Type: application/json');
    //echo json_encode($data); 
    echo json_encode(array("data" => $data));
//}
?>