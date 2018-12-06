<!DOCTYPE html>
<html lang="en">

<head>
<title>Referral Program Elements</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/cnrm.css" charset="UTF-8">
<script src="js/cnrm.js"></script>
</head>

<body>


<h1><center>Referral Program Elements</center></h1>

<form name="insert" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
<div style="overflow-x:auto;" id="mainContiner">
<table style="width:80%">
<tr>
<td>First Name:</td><td><input type="text" name="first_name" required/>  </span></td>
<td>Middle Name:</td><td><input type="text" name="middle_name" required /></td>
<td>Last Name:</td><td><input type="text" name="last_name" required /></td>
</tr>
<tr>
<td>Address:</td><td><input type="text" name="address" /></td>
</tr>
<tr>
<td>City:</td><td><input type="text" name="city" required/></td>
<td>State:</td><td><input type="text" name="state" required/></td>
<td>Zip Code:</td><td><input type="text" name="zip_code" required/></td>
</tr>

<tr>
<td>Phone No:</td><td><input type="text" name="phone_number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required/></td>
<td>Alternate Phone No:</td><td><input type="text" name="alternate_phone_number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required/></td>
</tr>

<tr>
<td>Email Address:</td><td><input type="text" name="email_address" pattern="^\w+([.-]?\w+)*@\w+([.-]?\w+)*(.\w{2,3})+$" required/></td>
<td>Age:</td><td><input type="number" size="6"  min="18" max="85" name="age" required/></td>
<td>Injury Year:</td><td><input type="number" size="8"  min="1900" max="2200" name="injury_year" required/></td>
</tr>

<tr>
<td>TBI diagnosis:</td>
<td>
<input type="radio" name="tbi_diagnosis" value="true" required>Yes
<input type="radio" name="tbi_diagnosis" value="false">No

</td>
<td>Military Status:</td><td>
<div class="select-style">
<select required>
  <option value="military_status">Active Duty</option>
  <option value="military_status">Reservist</option>
  <option value="military_status">Guardsman</option>
  <option value="military_status">Retiree</option>
    <option value="military_status">Veteran</option>
    <option value="military_status">Unknown</option>
</select>
</div>
</td>
</tr>


<tr>
<td>TBI symptoms:</td>
<td>
<input type="radio" name="tbi_symptoms" value="true" required>Yes
<input type="radio" name="tbi_symptoms" value="false">No

</td>
<td>Study Interest:</td><td><input type="text" name="study_interest" /></td>
</tr>


<tr>
<td>Secondary Diagnosis PTS:</td><td>
<input type="radio" name="secondary_diagnosis_pts" value="true" required>Yes
<input type="radio" name="secondary_diagnosis_pts" value="false">No
</td>
<td>What symptoms of TBI are  most important symptoms to find treatment for?</td>
<td>

<input type="checkbox" name="symptoms[]" value="SleepDisturbances">Sleep Disturbances
<input type="checkbox" name="symptoms[]" value="Irritability">irritability-emotional disturbances
<input type="checkbox" name="symptoms[]" value="Depression"> feelings of depression
<input type="checkbox" name="symptoms[]" value="seizures"> seizures

</td>
</tr>


<tr>
<td>Prior MRI:</td><td>
<input type="radio" name="prior_mri" value="true" required>Yes
<input type="radio" name="prior_mri" value="false">No
</td>
<td>
</td>
<td>
<input type="checkbox" name="symptoms[]" value="VisualDisturbances">Visual Disturbances
<input type="checkbox" name="symptoms[]" value="Memory Loss"> memory loss
<input type="checkbox" name="symptoms[]" value="Headache">Headache
</td>
</tr>

<tr>
<td>Sharpnel:</td><td>
<input type="radio" name="sharpnel" value="true" required>Yes
<input type="radio" name="sharpnel" value="false">No
</td>
<td>
</td>
<td>
<input type="checkbox" name="symptoms[]" value="PoorAtention">poor attention

<input type="checkbox" name="symptoms[]" value="Dizziness">dizziness/loss of balance
</td>
</tr>

<tr>
<td>DEERS Eligible:</td>
<td>
<input type="radio" name="deers_eligible" value="true" required>Yes
<input type="radio" name="deers_eligible" value="false">No
</td>

<td>
</td>

<td>
<input type="checkbox" name="symptoms[]" value="Concentration">Concentration
<input type="checkbox" name="symptoms[]" value="Irritability">irritability-emotional disturbances
</td>
</tr>

<tr>
<td>Enrolled in other CNRM studies?</td><td>
<input type="radio" id="cnrm_other_yes" name="other_cnrm_studies_enrollment" value="true" required>Yes
<input type="radio" id="cnrm_other_no" name="other_cnrm_studies_enrollment" value="false">No
</td>
<td>If Yes, Study Name</td><td><input type="text" name="other_enrolled_study_name" /></td>
</tr>

<tr>
<td>How Did you hear about us</td>
<td>
<div class="select-style">
<select required>
  <option value="information_source">Internet</option>
  <option value="information_source">CNN</option>
  <option value="information_source">Friends</option>
  <option value="information_source">NIH Seminar</option>
</select>
</div>
</td>
</tr>





<tr>
<td><input type="submit" name="submit" value="Submit" /></td>
</tr>

</table>
</div>






</form>


<?php
include("validation.php");
?>


</body>

</html>
