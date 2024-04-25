<div class="row container">
    <div class="col s12">
        <h3 class="light">Cadastro de funcionários</h3>
    </div>

    <div class="col s12">
        <form action="?router=Site/cad_func/" method="post">
            <div class="input-field col-s12 m6">
                <input type="text" name="nome" id="nome" required>
                <label for="nome">Digite seu nome</label>
            </div>
            
            <div class="input-field col-s12 m6">
                <input type="text" name="email" id="email" required> 
                <label for="nome">Digite seu email</label>
            </div>

            <div class="input-field col s12">
                <input type="submit" value="enviar" class="btn-small">
                <input type="reset" value="limpar" class="btn-small red">
            </div>
        </form>
    </div>
</div>