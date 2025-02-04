 <!-- php < -->
<!-- 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once("vendors/PHPMailer/src/PHPMailer.php");
require_once("vendors/PHPMailer/src/SMTP.php");
require_once("vendors/PHPMailer/src/Exception.php");

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
        $phpmail->SMTPDebug = 2;

        $phpmail->Host = "smtp.gmail.com";
        $phpmail->port = 587;

        $phpmail->STMPSecure = 'tls';
        $phpmail->SMTPAuth = true;

        $phpmail->Username = "abxtestemail";
        $phpmail->Password = "mvll lewe mtxj ugeb";
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
            require_once("contato.html");
        } else {
            $ok = 2;
            echo "Não foi possivel enviar a mensagem. Erro: " . $phpmail->ErrorInfo;
        } 

        $phpmailResposta = new PHPmailer\PHPMailer\PHPmailer();

        $phpmailResposta->isSMTP();
        $phpmailResposta->SMTPDebug = 0;
        $phpmailResposta->Host = "smtp.hostinger.com";
        $phpmailResposta->Port = 465;
        $phpmailResposta->SMTPSecure = 'ssl';
        $phpmailResposta->SMTPAuth = true;
        $phpmailResposta->Username = "tipitwo@tipi02.smpsistema.com.br"; //Email SMTP
        $phpmailResposta->Password = "Senac@tipitwo01"; //Senha SMTP
        $phpmailResposta->IsHTML(true);
        $phpmailResposta->setFrom("tipitwo@tipi02.smpsistema.com.br", "INNOVA CLICK"); //Remetente
        $phpmailResposta->addAddress($email, $nome); //Destinatário
        $phpmailResposta->Subject = "resposta - " . $assunto;

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
} catch (Exception $e) {
}  -->

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
            require_once("contato.html");
            throw new Exception("Email inválido!");
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

        // ********************E-MAIL DE RESPOSTA****************/
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
        $phpmailResposta->setFrom("abxqtzseven@gmail.com", "INNOVA CLICK");
        $phpmailResposta->addAddress($email, $nome);
        $phpmailResposta->Subject = "Resposta - " . $assunto;

        $phpmailResposta->msgHTML("$nome <br>
                                   Em breve retornaremos seu contato. <br>
                                   Mensagem: $mensagem <br>
                                   Em caso de dúvidas entre em contato pelo número <br>
                                   (11) 9999-6666");

        $phpmailResposta->AltBody = "$nome \n
                                     Em breve retornaremos seu contato. \n
                                     Mensagem: $mensagem \n
                                     Em caso de dúvidas entre em contato pelo número \n
                                     (11) 9999-6666";

        if (!$phpmailResposta->send()) {
            throw new Exception("Erro ao enviar email de resposta: " . $phpmailResposta->ErrorInfo);
        }

        echo "Mensagem enviada com sucesso!";
        require_once("contato.html");

    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
    }
}
?>


