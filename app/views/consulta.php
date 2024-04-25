<div class="row container">
    <div class="col s12">
        <h3 class="light">Consulta de funcionarios</h3>
    </div>

    <div class="col s12">
    <table>
        <tr>
            <th>Nome</th><th>Email</th><th>Ações</th>
        </tr>
        <?php foreach($consulta as $registro): ?>
            
            <tr>
                <td><?php echo $registro['nome'] ?></td>
                <td><?php echo $registro['email'] ?></td>
                <td>
                    <a href="?router=Site/editar/&id=<?php echo base64_encode($registro['id']) ?>">Alterar</a> |
                    <a href="?router=Site/confirmaDelete/&id=<?php echo base64_encode($registro['id']) ?>" class="red-text">Deletar</a>
                </td>
            <td>

        <?php endforeach; ?>
    </table>
    </div>
</div>