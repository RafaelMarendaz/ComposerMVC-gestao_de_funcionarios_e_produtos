<div class="row container">
    <div class="col s12">
        <h3 class="light">Cadastro de produto</h3>
    </div>

    <div class="col s12">
        <form action="?router=Site/cad_prod/" method="post">
            <div class="input-field col-s12 m6">
                <input type="text" name="produto" id="produto" required>
                <label for="nome">Produto</label>
            </div>
            
            <div class="input-field col-s12 m6">
                <input type="text" name="valor" id="valor" required>
                <label for="nome">Valor</label>
            </div>

            <div class="input-field col-s12 m6">
                <input type="text" name="qt_prod" id="qt_prod" required>
                <label for="nome">Quantidade</label>
            </div>

            <div class="input-field col s12">
                <input type="submit" value="enviar" class="btn-small">
                <input type="reset" value="limpar" class="btn-small red">
            </div>
        </form>
    </div>
</div>