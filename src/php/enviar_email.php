<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $about = $_POST['about'];
    $message = $_POST['message'];

    $name = strip_tags($name);
    $email = strip_tags($email);
    $about = strip_tags($about);
    $message = strip_tags($message);

    $content = "
    
        <html>
            <p><b>Nome: </b>$name</p>
            <p><b>Email: </b>$email</p>
            <p><b>Sobre: </b>$about</p>
            <p><b>Mensagem: </b>$message</p>
        </html>
    ";

    $sendto = "202108802077@alunos.estacio.br";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "FROM: $name <$email>";
    
    if(mail($sendto, $about, $content, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha ao enviar a mensagem.";
    }
?>