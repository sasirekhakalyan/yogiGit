
<html>
<body>
<?php
require_once 'pg_connection.php';
echo "<br>";
$login_user = $_POST["username"];
echo $login_user . " User trying to login.\r\n <br>";


$result = pg_prepare($db, "login_query", 'SELECT count(*) FROM cnrm_user WHERE username = $1');
$result = pg_execute($db, "login_query", array( $login_user));
 while ($row = pg_fetch_row($result)) {
  echo "User Count: $row[0]";
  if($row[0]==0){
  	//header("Location: http://localhost/#toregister"); 
  	echo "Navigate to Register";
	exit;
  }else{
  	//header("Location: http://localhost/#tologin");
  	echo "Navigate to login";
  	exit;
  }
 
}



?>

</body>
</html>