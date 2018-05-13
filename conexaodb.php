<?php

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "careadm@dbcaresenior", "pwd" => "00@2018care", "Database" => "dbcaresenior", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:dbcaresenior.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

?>

