<?php

   $host        = "host = proforms-stage-db.cit.nih.gov";
   $port        = "port = 5432";
   $dbname      = "dbname = cnrm_data";
   $credentials = "user =proforms_app_stg  password=Qhwq0iFZkKAc1NaU";

   $db = pg_connect( "$host $port $dbname $credentials"  ) or die('failed');;
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "PostgreSQL database connected successfully\n";
   }
?>