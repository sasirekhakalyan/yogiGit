<?php
require_once 'pg_connection.php';
$login_user = $_POST["username"];
$result = pg_prepare($db, "login_query", 'SELECT count(*) FROM cnrm_user WHERE username = $1');
$result = pg_execute($db, "login_query", array( $login_user));
 while ($row = pg_fetch_row($result)) {
  if($row[0]==0){
  	header("Location:index.php#toregister"); 
	exit;
  }else{
  	header("Location:cnrm.php"); 
  	exit;
  }
}?>