<?php
      session_start(); 
  require( 'conexaodb.php');
                
    $vnome        = $_POST['vnome'];
                $vregiao      = $_POST['vregiao'];
                $vbairro      = $_POST['vbairro'];
                $vtelefone    = $_POST['vtelefone'];
            $vemail       = $_POST['vemail'];
                $vsenha      = $_POST['vsenha'];
                
                
                if(isset($_FILES['arquivo'])){
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
    $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
    $diretorio = "Uploads/"; //define o diretorio para onde enviaremos o arquivo
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

            
  $SQL=("INSERT INTO sn_profissional (nome, regiao,bairro, telefone, email, resumo,senha) VALUES ('".$vnome."', '".$vregiao."', '".$vbairro."', '".$vtelefone."', '".$vemail."','".$novo_nome."','".$vsenha."')");
                      $res= sqlsrv_query($conn, $SQL);
                       if( $res ==1){
                        echo '<script type="text/javascript">
                                 alert("Cadastrado com sucesso!");
                                 location.href="login.php";    
                             </script>';
                       }
                       else {
                           echo '<script type="text/javascript">
                                 alert("Nome, Telefone ou Email já cadastrado!");
                                 location.href="cadastro.php";    
                             </script>';
                             
                       }
                }
                        
?>