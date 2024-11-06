<?php
$serverName = "GE08T";
$username = "Server2";
$password = "server2";
$dbName = "Testing_Web";

$connectionInfo = array( "Database"=>"$dbName", "UID"=>"$username", "PWD"=>"$password");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

?>