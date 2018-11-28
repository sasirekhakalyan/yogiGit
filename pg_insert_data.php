<?php
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
     '$symptoms_list'
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