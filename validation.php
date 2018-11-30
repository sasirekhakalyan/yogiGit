
<?php


// define variables and set to empty values
$first_name = $middle_name = $last_name =  "";


if(isset($_POST["submit"]))
{



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["first_name"]);
  $email = test_input($_POST["middle_name"]);
  $website = test_input($_POST["last_name"]);
  
    if(!empty($_POST["symptoms"])) {
    $symptoms_list = implode(', ', $_POST["symptoms"]);
    echo "<br />";
    echo "this is the val ". $symptoms_list;
    echo "<br />";


  }

}



}else{
 //echo "Error : Please correct all validation errors.\n";
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

include("pg_connection.php");

echo "<br />";

include("pg_insert_data.php");
?>
