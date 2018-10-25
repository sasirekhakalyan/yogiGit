<!DOCTYPE html>
<html lang="en">

<head>
<title>Referral Program Elements</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
li {
list-style: none;
}

</style>
</head>

<body>


<h1><center>Referral Program Elements</center></h1>

<form name="insert" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
<table style="width:80%">
<tr>
<td>First Name:</td><td><input type="text" name="first_name" value="<?php echo $first_name;?>"/></td>
<td>Middle Name:</td><td><input type="text" name="middle_name" value="<?php echo $middle_name;?>" /></td>
<td>Last Name:</td><td><input type="text" name="last_name" value="<?php echo $middle_name;?>"/></td>
</tr>
<tr>
<td>Address:</td><td><input type="text" name="address" /></td>
</tr>
<tr>
<td>City:</td><td><input type="text" name="city" /></td>
<td>State:</td><td><input type="text" name="state" /></td>
<td>Zip Code:</td><td><input type="text" name="zip_code" /></td>
</tr>

<tr>
<td>Phone No:</td><td><input type="text" name="phone_number" /></td>
<td>Alternate Phone No:</td><td><input type="text" name="alternate_phone_number" /></td>
</tr>

<tr>
<td>Email Address:</td><td><input type="text" name="email_address" /></td>
<td>Age:</td><td><input type="text" name="age" /></td>
<td>Injury Year:</td><td><input type="text" name="injury_year" /></td>
</tr>

<tr>
<td>TBI diagnosis:</td>
<td>
<input type="radio" name="tbi_diagnosis" value="true">Yes
<input type="radio" name="tbi_diagnosis" value="false">No

</td>
<td>Military Status:</td><td>
<select>
  <option value="military_status">Active Duty</option>
  <option value="military_status">Reservist</option>
  <option value="military_status">Guardsman</option>
  <option value="military_status">Retiree</option>
    <option value="military_status">Veteran</option>
    <option value="military_status">Unknown</option>
</select>
</td>
</tr>


<tr>
<td>TBI Symptoms:</td>
<td>
<input type="radio" name="tbi_symptoms" value="true">Yes
<input type="radio" name="tbi_symptoms" value="false">No

</td>
<td>Study Interest:</td><td><input type="text" name="study_interest" /></td>
</tr>


<tr>
<td>Secondary Diagnosis PTS:</td><td>
<input type="radio" name="secondary_diagnosis_pts" value="true">Yes
<input type="radio" name="secondary_diagnosis_pts" value="false">No
</td>
<td>What Symptoms of TBI are  most important symptoms to find treatment for?</td>
<td>

<input type="checkbox" name="symptoms" value="SleepDisturbances">Sleep Disturbances
<input type="checkbox" name="symptoms" value="Irritability">irritability-emotional disturbances
<input type="checkbox" name="symptoms" value="Depression"> feelings of depression
<input type="checkbox" name="symptoms" value="seizures"> seizures

</td>
</tr>


<tr>
<td>Prior MRI:</td><td>
<input type="radio" name="prior_mri" value="true">Yes
<input type="radio" name="prior_mri" value="false">No
</td>
<td>
</td>
<td>
<input type="checkbox" name="symptoms" value="VisualDisturbances">Visual Disturbances
<input type="checkbox" name="symptoms" value="Memory Loss"> memory loss
<input type="checkbox" name="symptoms" value="Headache">Headache
</td>
</tr>

<tr>
<td>Sharpnel:</td><td>
<input type="radio" name="sharpnel" value="true">Yes
<input type="radio" name="sharpnel" value="false">No
</td>
<td>
</td>
<td>
<input type="checkbox" name="symptoms" value="PoorAtention">poor attention

<input type="checkbox" name="symptoms" value="Dizziness">dizziness/loss of balance
</td>
</tr>

<tr>
<td>DEERS Eligible:</td>
<td>
<input type="radio" name="deers_eligible" value="true">Yes
<input type="radio" name="deers_eligible" value="false">No
</td>

<td>
</td>

<td>
<input type="checkbox" name="symptoms" value="Concentration">Concentration
<input type="checkbox" name="symptoms" value="Irritability">irritability-emotional disturbances
</td>
</tr>

<tr>
<td>Enrolled in other CNRM studies?</td><td>
<input type="radio" name="other_cnrm_studies_enrollment" value="true">Yes
<input type="radio" name="other_cnrm_studies_enrollment" value="false">No
</td>
<td>If Yes, Study Name</td><td><input type="text" name="other_enrolled_study_name" /></td>
</tr>

<tr>
<td>How Did you hear about us</td>
<td>
<select>
  <option value="information_source">Internet</option>
  <option value="information_source">CNN</option>
  <option value="information_source">Friends</option>
  <option value="information_source">NIH Seminar</option>
</select>
</td>
</tr>





<tr>
<td><input type="submit" name="submit" value="Submit" /></td>
</tr>

</table>







</form>



<?php


// define variables and set to empty values
$first_name = $middle_name = $last_name =  "";


if(isset($_POST["submit"]))
{

$age = '$_POST[age]';
$min = 18;
$max = 85;

if (filter_var($age, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
    echo("Variable value is not within the legal range");
} else {
    echo("Variable value is within the legal range");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["first_name"]);
  $email = test_input($_POST["middle_name"]);
  $website = test_input($_POST["last_name"]);

}



}else{
 echo "Error : Please correct all validation errors.\n";
 return;
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


echo "By Yograraj Khanal on PHP version " . phpversion();
echo "<br />";

   $host        = "host = localhost";
   $port        = "port = 5432";
   $dbname      = "dbname = cn";
   $credentials = "user =user  password=pass";


	
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




<script>


</script>
</body>

</html>
