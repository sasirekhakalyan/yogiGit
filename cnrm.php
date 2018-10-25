<!DOCTYPE html>
<html>

<head>
<title>Insert data to PostgreSQL with php - creating a simple web application</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
li {
list-style: none;
}
</style>
</head>

<body>


<h1>CNRM Clinicial Trial Referral Systems</h1>
<ul>
<form name="insert" action="cnrm.php" method="POST" >
<li>First Name:</li><li><input type="text" name="first_name" /></li>
<li>Middle Name:</li><li><input type="text" name="middle_name" /></li>
<li>Last Name:</li><li><input type="text" name="last_name" /></li>
<li>Address:</li><li><input type="text" name="address" /></li>
<li>City:</li><li><input type="text" name="city" /></li>
<li>State:</li><li><input type="text" name="state" /></li>
<li>Zip Code:</li><li><input type="text" name="zip_code" /></li>
<li>Phone No:</li><li><input type="text" name="phone_number" /></li>
<li>Alternate Phone No:</li><li><input type="text" name="alternate_phone_number" /></li>
<li>Email Address:</li><li><input type="text" name="email_address" /></li>
<li>Age:</li><li><input type="text" name="age" /></li>
<li>Injury Year:</li><li><input type="text" name="injury_year" /></li>
<li>TBI diagnosis:</li><li><input type="text" name="tbi_diagnosis" /></li>
<li>TBI Symptoms:</li><li><input type="text" name="tbi_symptoms" /></li>
<li>Secondary Diagnosis PTS:</li><li><input type="text" name="secondary_diagnosis_pts" /></li>
<li>Prior MRI:</li><li><input type="text" name="prior_mri" /></li>
<li>Sharpnel:</li><li><input type="text" name="sharpnel" /></li>
<li>Deers Eligible:</li><li><input type="text" name="deers_eligible" /></li>
<li>Military Status:</li><li><input type="text" name="military_status" /></li>
<li>Study Interest:</li><li><input type="text" name="study_interest" /></li>
<li>Other CNRM Studies enrollment:</li><li><input type="text" name="other_cnrm_studies_enrollment" /></li>
<li>Enrolled  Studies Name:</li><li><input type="text" name="other_enrolled_study_name" /></li>
<li>Info Source:</li><li><input type="text" name="information_source" /></li>
<li>Symptioms:</li><li><input type="text" name="symptoms" /></li>
<li><input type="submit" /></li>
</form>
</ul>


<?php

<?php
echo "By Yograraj Khanal on PHP version " . phpversion();
echo "<br />";

   $host        = "host = hostname";
   $port        = "port = 5432";
   $dbname      = "dbname = dbname";
   $credentials = "user =username  password=s3cr3T";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "PostgreSQL database connected successfully\n";
   }
   
   echo "<br />";
   
   
    $sql =<<<EOF
  INSERT INTO cnrm_clinical_trial_referral (subject_id,
		  first_name,
		  middle_name,
		  last_name,
		  address,
		  city,
		  state,
		  zip_code,
		phone_number,
		alternate_phone_number,
    email_address,
			age,
		injury_year, 
		tbi_diagnosis,
		tbi_symptoms,
		secondary_diagnosis_pts,
		prior_mri,
		sharpnel,
        deers_eligible,
		military_status,
		study_interest,
		other_cnrm_studies_enrollment,
		other_enrolled_study_name,
        information_source,
	              symptoms)VALUES (DEFAULT,
     '$_POST[first_name]',
   '$_POST[middle_name]',
      '$_POST[last_name]',
      '$_POST[address]',
     '$_POST[city]',
      '$_POST[state]',
      '$_POST[zip_code]',
      '$_POST[phone_number]',
     '$_POST[alternate_phone_number]',
     '$_POST[email_address]',
 '$_POST[injury_year]',
    '$_POST[age]',
     '$_POST[tbi_diagnosis]',
     '$_POST[tbi_symptoms]',
     '$_POST[secondary_diagnosis_pts]',
     '$_POST[prior_mri]',
    '$_POST[sharpnel]',
     '$_POST[deers_eligible]',
      '$_POST[military_status]',
                '$_POST[study_interest]',
    '$_POST[other_cnrm_studies_enrollment]',
     '$_POST[other_enrolled_study_name]',
     '$_POST[information_source]',
     '$_POST[symptoms]'
                );
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Records created successfully\n";
   }
   pg_close($db);
?>
</body>
</html>
