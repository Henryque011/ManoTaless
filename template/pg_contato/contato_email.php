<section class="contato_email">
    <article class="site">
        <form action="email.php" method="POST">
            <?php
            if (isset($_SESSION['msg']) && isset($_SESSION['status'])) {
                if ($_SESSION['status'] == "sucesso") {
                    echo '<div class="alert alert-success custom-sucess" role="alert">' . $_SESSION['msg'] . '</div>';
                } else {
                    echo '<div class="alert alert-danger custom-danger" role="alert">' . $_SESSION['msg'] . '</div>';
                }
                unset($_SESSION['msg'], $_SESSION['status']);
            }
            ?>
            <div class="box_contato">
                <div>
                    <label for="nome">Nome:</label>
                    <input class="campo_email" id="placeholder-text" type="text" name="nome" id="nome" placeholder="Nome completo: "
                        required>
                </div>
                <div>
                    <label for="tel">telefone:</label>
                    <input class="campo_email" id="placeholder-text" type="tel" name="tel" id="tel" placeholder="Telefone: "
                        required>
                </div>
                <div>
                    <label for="email">email:</label>
                    <input class="campo_email" id="placeholder-text" type="email" name="email" id="email" placeholder="Email: "
                        required>
                </div>
            </div>
            <div class="space"></div>
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