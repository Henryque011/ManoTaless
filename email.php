<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once("vendors/PHPMailer/src/PHPMailer.php");
require_once("vendors/PHPMailer/src/SMTP.php");
$ok =0;

try {
    if (isset($_POST["email"])) {
        $nome           = $_POST["nome"];
        $telefone       = $_POST["tel"];
        $email          = $_POST["email"];
        $mensagem       = $_POST["mensagem"];
        $assunto     = "CONTATO VIA SITE";

        $phpmail = new PHPMailer\PHPMailer\PHPMailer();
        $phpmail-> isSMTP();
        $phpmail-> SMTPDebug = 0;

        $phpmail-> Host = "smtp.hostinger.com";
        $phpmail-> port = 465;

        $phpmail-> STMPSecure = 'ssl';
        $phpmail-> SMTPAuth = true;

        $phpmail-> Username = "tipitwo@tipi02.smpsistema.com.br";
        $phpmail-> Password = "Senac@tipitwo01";
        $phpmail-> IsHTML(true);
        $phpmail-> setFrom("abxqtzseven@gmail.com", $nome); //remetente
        $phpmail-> addAddress("abxqtzseven@gmail.com", $assunto); //destinatario

        $phpmail-> Subject = $assunto;

        $phpmail-> msgHTML("Nome: $nome <br>
                            E-Mail: $email <br>
                            Telefone: $telefone <br>
                            Mensagem: $mensagem");

        $phpmail-> AltBody = "Nome: $nome \n
                            E-Mail: $email \n
                            Telefone: $telefone \n
                            Mensagem: $mensagem";
        if ($phpmail->send()) {
            $ok = 1;
            echo "Mensagem enviada com sucesso!";
            require_once("index.html");
        } else {
            $ok = 2;
            echo "Não foi possivel enviar a mensagem. Erro: " .$phpmail->ErrorInfo;
        }
    }
} catch (Execption $e) {
}
?>
