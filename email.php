<?php

if(isset($_POST['email'])&& !empty($_POST['email']))
{

    $nome = addslashes($_POST['nome']);   
    $email = addslashes($_POST['email']); 
    $telefone = addslashes($_POST['telefone']); 


    $to = "contato@belingerdigital.com.br";
    $subject = "Formulario de contatos";
    $body = "Nome: ".$nome."\r\n".
            "email: ".$email."\r\n".
            "telefone: ".$telefone;

            $header = "From:jetad062@gmail.com"."\r\n".
            "Reply-To:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();

            if(mail($to,$subject,$body,$header))
            {

                echo("Email enviado com sucesso! Obrigado pelo contato!");
            }else
                {
                    echo("O email não pode ser enviado!");
                }
}
?>