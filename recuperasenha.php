<?php
require_once('PHPMailer.php/class.phpmailer.php');
require( 'conexaodb.php');


$enviaemail = $_POST['enviaemail'];

function RecuperaSenha($enviaemail){
    $sqlbuscar="select senha from sn_profissional where email = '".$enviaemail."'"; 
    $res = sqlsrv_query($conn, $sqlbuscar); 
	$busca=Array();											
	while( $busca=sqlsrv_fetch_array($res))
    {
        $senha = $busca['senha'];
        if($busca ==""){
            return false;
        }
        else{
            return $senha;
        }
    }   
}


$validaEmail = RecuperaSenha($enviaemail);
if($validaEmail == false){
    echo "Falha";
}
else{
    echo"Sucesso";
}
/*
if($validaEmail == false)
    {        
    echo "<meta charset='UTF-8'>"
    . "<script type='text/javascript'> "
    . "alert('E-mail não cadastrado no sistema! Tente outro e-mail ou faça um cadastro');"
            . "location.href='login.php';</script>";
        
    }
    else
        {    
            $mail = new PHPMailer(); //instancia a classe PHPMailer

            //configuração do gmail
            $mail->Port = '465'; //porta usada pelo gmail
            $mail->Host = 'smtp.gmail.com';
            $mail->isHTML(true);
            $mail->Mailer = 'smtp';
            $mail->SMTPSecure = 'ssl';

            //configuração do usuário do gmail
            $mail->SMTPAuth = true;
            $mail->Username = 'seniorscare36@gmail.com'; //usuario gmail
            $mail->Password = 'Senior1234'; //senha do gmail

            $mail->SingleTo = true;

            //define a codificação da mensagem
            $mail->CharSet = "utf-8";

            //configuração do email a ser enviado
            $mail->From = "seniorscare36@gmail.com"; //email pode vir por uma variavel
            $mail->FromName = "Equipe SeniorsCare"; //remetente

            $mail->addAddress($enviaemail); //email do destinatário recebido via POST

            $mail->Subject = "Equipe SeniorsCare - Reenvio de senha"; // assunto do email
            $mail->Body = "Sua senha é: ". $validaEmail;

            if(!$mail->send()){
                echo "Erro ao enviar Email: ". $mail->ErrorInfo;
            }
            else{
                echo "sucesso";
                header ('Location:login.php');
            }
        }*/
?>