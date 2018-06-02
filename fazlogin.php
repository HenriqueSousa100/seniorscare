<?php 
	session_start(); 
	require( 'conexaodb.php');
  
  $email = $_POST['email'];
  $entrar = $_POST['entrar'];
  $senha = $_POST['senha'];
  
    if (isset($entrar)) {
           
      $SQLL=("select * from sn_profissional where email = '".$email."' and senha = '".$senha."'") or die("erro ao selecionar");  
      $verifica = sqlsrv_query($conn, $SQLL);
        if (sqlsrv_num_rows($verifica)==0){
          $_SESSION["profissional_logado"] = $email;
           header('Location:areaprofissional.php');
        }
        else{
         echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.php';</script>";
          die();
        }
    }
?>