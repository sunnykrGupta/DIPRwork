<?php
require("constants.php");

// open a connection to the database server $connection = pg_connect ("host=$host dbname=$db user=$user password=$pass");
//if (!$connection) { die("Could not open connection to database server"); }


// 1. Create a database connection
$connection = pg_connect("host=$HOST dbname=$PGDB user=$PGUSER password=$PGPASS");
if (!$connection) {
	die("Database connection failed: ");
}

?>