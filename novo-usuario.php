<?php require __DIR__."/header.php"; ?>

<section class="section">
        <div class="container">
            <h1 class="title">Formulário de Cadastro</h1>
            <form action="./index.php?acao=cadastrar" method="POST">
                <div class="field">
                    <label class="label">Username</label>
                    <div class="control">
                        <input class="input" type="text" name="usuario" placeholder="Digite seu username" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Nome completo</label>
                    <div class="control">
                        <input class="input" type="text" name="nome" placeholder="Digite seu nome" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Password</label>
                    <div class="control">
                        <input class="input" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <input type="submit" value="Cadastrar" class="button has-backgroun-white">
                    </div>
                </div>
            </form>
        </div>
    
        <?php require __DIR__."/footer.php"; ?>
