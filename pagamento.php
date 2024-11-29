<section class="section">
        <div class="container">
            <h1 class="title">Formulário pagamento</h1>
            <form action="./index.php?acao=atualizar" method="POST">
                <div class="field">
                    <label class="label">Nome do Curso</label>
                    <div class="control">
                        <input class="input" type="text" name="usuario" placeholder="Digite seu username" value="<?= !empty($usuario)? $usuario[0]->getCursoNome():''?>" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Valor a ser depositado</label>
                    <div class="control">
                        <input class="input" type="text" name="nome" placeholder="Digite sua senha" value="<?= !empty($usuario)? $usuario[0]->getValor():''?>" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label">Digite seu CPF:</label>
                    <div class="control">
                        <input class="input" type="password" name="senha" placeholder="Digite sua senha" value="<?= !empty($usuario)? $usuario[0]->getCPF():''?>" required>
                    </div>
                </div>

                <p><strong>Vai querer um recibo?</strong></p>
                <div class="radios">
                    <div class="control">
                        <label class="radio">
                            <input type="radio" name="ativo" value="1" <?= !empty($usuario) && $usuario[0]->getAtivo() == 1 ? 'checked' :''?>>
                           Sim
                        </label>
                        <label class="radio">
                            <input type="radio" name="ativo" value="0" <?= !empty($usuario) && $usuario[0]->getAtivo() == 0 ? 'checked' :''?>>
                           Não
                        </label>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <button class="button is-primary">Efetuar o pagamento</button>
                    </div>
                </div>
            </form>
        </div>
    
        <?php require __DIR__."/footer.php"; ?>
