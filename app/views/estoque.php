<div class="row container">
    <div class="col s12">
        <h3 class="light">Consulta de Estoque</h3>
    </div>

    <div class="col s12">
    <table>
        <tr>
            <th>Produto</th><th>Valor</th><th>Quantidade</th>
        </tr>
        <?php foreach($estoque as $registro): ?>
            
            <tr>
                <td><?php echo $registro['produto'] ?></td>
                <td><?php echo $registro['valor'] ?></td>
                <td><?php echo $registro['quantidade'] ?></td>
                <td>
                    <a href="?router=Site/editarproduto/&id=<?php echo base64_encode($registro['id']) ?>">Alterar</a> |
                    <a href="?router=Site/confirmaDeleteProduto/&id=<?php echo base64_encode($registro['id']) ?>" class="red-text">Deletar</a>
                </td>
            <td>

        <?php endforeach; ?>
    </table>
    </div>
</div>