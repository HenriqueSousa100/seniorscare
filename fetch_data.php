<?php
if(isset($_POST['get_option']))
{
 $serverName = "databaseseniorscare.database.windows.net";
$connectionOptions = array(
    "Database" => "DB_SENIORS_CARE",
    "Uid" => "admcare",
    "PWD" => "00@2018care");
 sqlsrv_connect($serverName,$connectionOptions);
 sqlsrv_select_db('DB_SENIORS_CARE');

 $state = $_POST['get_option'];
 $find=sqlsrv_query("execute psnbuscaregiao ('$vregiao')");
 while($row=sqlsrv_fetch_array($find))
 {
  echo "<option>".$row['regiao']."</option>";
 }
 exit;
}
?>