<div class="row container">
    <div class="col s12">
        <h3 class="light">Edição de Produtos</h3>
    </div>

    <div class="col s12">
        <form action="?router=Site/alterarprod/" method="post">
        <?php foreach($editarprod as $produto): ?>
        
            <input type="hidden" name="id" value="<?php echo $produto['id'] ?>">
            <div class="input-field col-s12 m6">
                <input type="text" name="nome" id="nome" value="<?php echo $produto['produto'] ?>" required>
                <label for="nome">Produto</label>
            </div>
            
            <div class="input-field col-s12 m6">
                <input type="number" name="valor" id="valor" value="<?php echo $produto['valor'] ?>" required>
                <label for="nome">Valor</label>
            </div>

            <div class="input-field col-s12 m6">
                <input type="number" name="quantidade" id="quantidade" value="<?php echo $produto['quantidade'] ?>" required>
                <label for="nome">Quantidade</label>
            </div>

            <div class="input-field col s12">
                <input type="submit" value="Salvar alterações" class="btn-small">
                <input type="reset" value="limpar" class="btn-small red">
            </div>

        <?php endforeach; ?>
        </form>
    </div>
</div>