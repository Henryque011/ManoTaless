<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once("vendors/PHPMailer/src/PHPMailer.php");
require_once("vendors/PHPMailer/src/SMTP.php");
$ok = 0;

try {
    if (isset($_POST["email"])) {
        $nome           = $_POST["nome"];
        $telefone       = $_POST["tel"];
        $email          = $_POST["email"];
        $mensagem       = $_POST["mensagem"];
        $assunto     = "CONTATO VIA SITE";

        $phpmail = new PHPMailer\PHPMailer\PHPMailer();
        $phpmail->isSMTP();
        $phpmail->SMTPDebug = 0;

        $phpmail->Host = "smtp.gmail.com";
        $phpmail->port = 465;

        $phpmail->STMPSecure = 'ssl';
        $phpmail->SMTPAuth = true;

        $phpmail->Username = "henryquenonatosilva@gmail.com";
        $phpmail->Password = "rvoh totu dndy wmck1";
        $phpmail->IsHTML(true);
        $phpmail->setFrom("abxqtzseven@gmail.com", $nome); //remetente
        $phpmail->addAddress("abxqtzseven@gmail.com", $assunto); //destinatario

        $phpmail->Subject = $assunto;

        $phpmail->msgHTML("Nome: $nome <br>
                            E-Mail: $email <br>
                            Telefone: $telefone <br>
                            Mensagem: $mensagem");

        $phpmail->AltBody = "Nome: $nome \n
                            E-Mail: $email \n
                            Telefone: $telefone \n
                            Mensagem: $mensagem";
        if ($phpmail->send()) {
            $ok = 1;
            echo "Mensagem enviada com sucesso!";
            require_once("index.html");
        } else {
            $ok = 2;
            echo "Não foi possivel enviar a mensagem. Erro: " . $phpmail->ErrorInfo;
        }

        // $phpmailResposta = new PHPmailer\PHPMailer\PHPmailer();

        // $phpmailResposta->isSMTP();
        // $phpmailResposta->SMTPDebug = 0;
        // $phpmailResposta->Host = "smtp.hostinger.com";
        // $phpmailResposta->Port = 465;
        // $phpmailResposta->SMTPSecure = 'ssl';
        // $phpmailResposta->SMTPAuth = true;
        // $phpmailResposta->Username = "tipitwo@tipi02.smpsistema.com.br"; //Email SMTP
        // $phpmailResposta->Password = "Senac@tipitwo01"; //Senha SMTP
        // $phpmailResposta->IsHTML(true);
        // $phpmailResposta->setFrom("tipitwo@tipi02.smpsistema.com.br", "INNOVA CLICK"); //Remetente
        // $phpmailResposta->addAddress($email, $nome); //Destinatário
        // $phpmailResposta->Subject = "resposta - " . $assunto;

        $phpmailResposta->msgHTML("$nome <br>
        Em breve retornaremos seu contato. <br>
        Mensagem: $mensagem <br>
        Emcaso de dúvidas entre em contato pelo número <br>
        (11)9999-6666");
        $phpmailResposta->AltBody = "$nome \n
        Em breve retornaremos seu contato. \n
        Mensagem: $mensagem \n
        Emcaso de dúvidas entre em contato pelo número \n
        (11)9999-6666";
        $phpmailResposta->send();
    }
} catch (Execption $e) {
}
