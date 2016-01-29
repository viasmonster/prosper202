<?php
define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
define('DB_PORT',getenv('OPENSHIFT_MYSQL_DB_PORT')); 

 $dbhost=DB_HOST;
 $dbport=DB_PORT;
 echo "Database Host : ".$dbhost.":".$dbport;
 ?>
