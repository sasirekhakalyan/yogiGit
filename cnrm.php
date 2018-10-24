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
?>
</body>
</html>
