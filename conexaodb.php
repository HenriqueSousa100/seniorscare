<?php

$vregiao = $_REQUEST['regiao'];

$serverName = "databaseseniorscare.database.windows.net";
$connectionOptions = array(
    "Database" => "DB_SENIORS_CARE",
    "Uid" => "admcare",
    "PWD" => "00@2018care"
);
$conn = sqlsrv_connect($serverName, $connectionInfo);

$result = sqlsrv_query($conn, "CALL psnbuscaregiao(" + $vregiao + ");") or die("Erro na query da procedure: " . sqlsrv_error()); 

while ($row = sqlsrv_fetch_array($result)) {   
             echo "<option>"+row[bairro]+"</option>";
          }
?>

