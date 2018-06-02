<?php
session_start();
unset($email,$senha );

session_destroy();	 

header('Location:login.php');

?>