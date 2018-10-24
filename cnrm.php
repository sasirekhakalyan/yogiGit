<!DOCTYPE html>
<html>
<body>


<h1>CNRM Clinicial Trial Referral Systems</h1>

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
			'Prayush',
      'NMN',
      'Khanal',
      '123 Main   Cir',
      'Bethesda',
      'MD',
      '12345',
      '1234567890',
      '0987654321',
      'yogi@fbi.gov',
      100,
      2000,
      false,
      false,
      false,
      false,
      false,
      false,
        false,
		'ACTIVE',		 
      false,
      'true',
      'Clinical',
      'internet'
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
