<?php

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "admcare@databaseseniorscare", "pwd" => "00@2018care", "Database" => "DB_SENIORS_CARE", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:databaseseniorscare.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

?>

