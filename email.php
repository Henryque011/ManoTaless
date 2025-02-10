<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once("vendors/PHPMailer/src/PHPMailer.php");
require_once("vendors/PHPMailer/src/SMTP.php");
require_once("vendors/PHPMailer/src/Exception.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $nome     = htmlspecialchars($_POST["nome"]);
        $telefone = htmlspecialchars($_POST["tel"]);
        $email    = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        $mensagem = htmlspecialchars($_POST["mensagem"]);
        $assunto  = "Mano Taless";

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Email inválido!");
            // require_once("contato.php");
        }

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;

        $mail->Username = "abxqtzseven@gmail.com";
        $mail->Password = "mvll lewe mtxj ugeb";

        $mail->setFrom("abxqtzseven@gmail.com", $nome);
        $mail->addAddress("abxqtzseven@gmail.com", $assunto);
        $mail->Subject = $assunto;

        $mail->isHTML(true);
        $mail->Body = "Nome: $nome <br>Email: $email <br>Telefone: $telefone <br>Mensagem: $mensagem";
        $mail->AltBody = "Nome: $nome \nEmail: $email \nTelefone: $telefone \nMensagem: $mensagem";

        if (!$mail->send()) {
            throw new Exception("Erro ao enviar: " . $mail->ErrorInfo);
        }

        // ********************E-MAIL DE RESPOSTA**************** //
        $phpmailResposta = new PHPMailer(true);

        $phpmailResposta->isSMTP();
        $phpmailResposta->SMTPDebug = 0;
        $phpmailResposta->Host = "smtp.gmail.com";
        $phpmailResposta->Port = 587;
        $phpmailResposta->SMTPSecure = 'tls';
        $phpmailResposta->SMTPAuth = true;
        $phpmailResposta->Username = "abxqtzseven@gmail.com";
        $phpmailResposta->Password = "mvll lewe mtxj ugeb";

        $phpmailResposta->IsHTML(true);
        $phpmailResposta->setFrom("abxqtzseven@gmail.com", "Mano Taless");
        $phpmailResposta->addAddress($email, $nome);
        $phpmailResposta->Subject = "Resposta - " . $assunto;

        $phpmailResposta->msgHTML("$nome <br>
                                    ------------------------------------------------------------------------------------------------------------------- <br>
                                    Em breve retornaremos seu contato! <br>
                                    ------------------------------------------------------------------------------------------------------------------- <br>
                                    Sua mensagem: $mensagem <br>
                                    ------------------------------------------------------------------------------------------------------------------- <br>
                                    Em caso de dúvidas, entre em contato pelo número <br>
                                    (11)970428582 ");

        $phpmailResposta->AltBody = "$nome \n
                                        ------------------------------------------------------------------------------------------------------------------- \n
                                        Em breve retornaremos seu contato! \n
                                        ------------------------------------------------------------------------------------------------------------------- \n
                                        Sua mensagem: $mensagem \n
                                        ------------------------------------------------------------------------------------------------------------------- \n
                                        Em caso de dúvidas entre em contato pelo número \n
                                        (11)970428582 ";

        if (!$phpmailResposta->send()) {
            throw new Exception("Erro ao enviar email de resposta: " . $phpmailResposta->ErrorInfo);
        }
        $_SESSION['msg']    = "Mensagem enviada com sucesso!";
        $_SESSION['status'] = "sucesso";
    } catch (Exception $e) {
        $_SESSION['msg']    = "Erro: " . $e->getMessage();
        $_SESSION['status'] = "Erro";
    }

    // Redirecionar para o formulário
    header("Location: contato.php");
    exit;
}
