<?php
				session_start(); 
				require( 'conexaodb.php');
								
				$vnome        = $_POST['vnome'];
                $vregiao      = $_POST['vregiao'];
                $vbairro      = $_POST['vbairro'];
                $vtelefone    = $_POST['vtelefone'];
				$vemail       = $_POST['vemail'];
                $vresumo      = $_POST['vresumo'];


                $SQL=("INSERT INTO sn_profissional (nome, regiao, 
						bairro, telefone, email, resumo) VALUES ('".$vnome."', '".$vregiao."', '".$vbairro."', '".$vtelefone."', '".$vemail."', '".$vresumo."')");
                      $res= sqlsrv_query($conn, $SQL);
                       if( $res !=0){
                        echo '<script type="text/javascript">
                                 alert("Cadastrado com sucesso!");
                                 location.href="cadastro.php";    
                             </script>';
                       }
                       
                           
                           
                   
								
							?>
                            