
<?php

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
        $assunto  = "Contato via site";

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Email inválido!");
        }

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->SMTPDebug = 2;  // 0 = Desativado | 2 = Depuração
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;

        // Configure suas credenciais no ambiente (.env ou servidor)
        $mail->Username = "abxqtzseven@gmail.com";
        $mail->Password = "mvll lewe mtxj ugeb"; 

        $mail->setFrom("abxqtzseven@gmail.com", "Seu Nome");
        $mail->addAddress("abxqtzseven@gmail.com", "Destinatário");
        $mail->Subject = $assunto;

        $mail->isHTML(true);
        $mail->Body = "Nome: $nome <br>Email: $email <br>Telefone: $telefone <br>Mensagem: $mensagem";
        $mail->AltBody = "Nome: $nome \nEmail: $email \nTelefone: $telefone \nMensagem: $mensagem";

        if ($mail->send()) {
            echo "Mensagem enviada com sucesso!";
        } else {
            throw new Exception("Erro ao enviar: " . $mail->ErrorInfo);
        }
    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
    }
}
?>

