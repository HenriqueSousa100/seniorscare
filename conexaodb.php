<? php

try {
    $conn = new PDO("sqlsrv:server = tcp:databaseseniorscare.database.windows.net,1433; Database = DB_SENIORS_CARE", "admcare", "{00@2018care}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "admcare@databaseseniorscare", "pwd" => "{00@2018care}", "Database" => "DB_SENIORS_CARE", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:databaseseniorscare.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

?>
