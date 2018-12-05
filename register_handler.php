<?php
require_once 'pg_connection.php';
$sql =<<<EOF
  INSERT INTO cnrm_user (userid,username,password,email,active,token,role,comments,created_on,last_login)
		VALUES (DEFAULT,'$_GET[usernamesignup]','$_GET[passwordsignup]','$_GET[emailsignup]','','','','',NOW() ,NOW());
EOF;
$ret = pg_query($db, $sql);
pg_close($db);
header("Location:index.php#tologin"); 
?>
