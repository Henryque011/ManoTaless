<?php
// Verifica se a sessão já foi iniciada antes de acessar $_SESSION
$msg = isset($_SESSION['msg']) ? $_SESSION['msg'] : '';
$status = isset($_SESSION['status']) ? $_SESSION['status'] : '';

// Limpa as mensagens após carregá-las
?>
<section class="contato_email">
    <article class="site">
        <?php if (isset($_SESSION['msg'])) : ?>
            <div class="alerta <?= $_SESSION['status'] === 'sucesso' ? 'alerta-sucesso' : 'alerta-erro' ?>">
                <?= $_SESSION['msg']; ?>
            </div>
            <?php unset($_SESSION['msg'], $_SESSION['status']); ?>
        <?php endif; ?>
        <form action="email.php" method="POST">
            <div class="box_contato">
                <div>
                    <label for="nome">Nome:</label>
                    <input id="placeholder-text" type="text" name="nome" id="nome" placeholder="Nome completo: "
                        required>
                </div>
                <div>
                    <label for="tel">telefone:</label>
                    <input id="placeholder-text" type="tel" name="tel" id="tel" placeholder="Telefone: "
                        required>
                </div>
                <div>
                    <label for="email">email:</label>
                    <input id="placeholder-text" type="email" name="email" id="email" placeholder="Email: "
                        required>
                </div>
            </div>
            <div class="box_mensagem">
                <div>
                    <label for="mensagem"> Mensagem:</label>
                    <textarea id="placeholder-text" name="mensagem" id="mensagem"
                        placeholder="Digite seu mensagem: " required></textarea>
                </div>
                <div class="btn_contato"
                    style="display: flex; justify-content: space-evenly; align-items: center; text-align: center;">
                    <input type="submit" value="ENVIAR">
                    <input type="reset" value="LIMPAR">
                </div>
            </div>
        </form>
        <!-- <!-- <form action="https://formsubmit.co/abxqtzseven@gmail.com" method="post"> -->
    </article>
</section>