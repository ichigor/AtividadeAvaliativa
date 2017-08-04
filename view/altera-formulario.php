<?php
	include("cabecalho.php");
    include("../util/conecta.php");
    include("../dao/dados-estacoes-DAO.php");
    include("../dao/estacoes-DAO.php");

    $id=$_GET['id'];
    $dado=buscaDado($conexao, $id);
    $estacoes = listaEstacoes($conexao);
 ?>
    <h1>Alterar dados da estação</h1>
    <form action="../controller/altera-dado-estacoes.php" method="post">
        <input type="hidden" name="id" value="<?=$dado['id'] ?>">
        <table class="table">
            <tr>
                <td>Estação:</td>
                <td>
                    <select name="estacao_id" class="form-control">
                        <?php foreach ($estacoes as $estacao):
                            $estacaoAtual = $dado['estacao_id'] == $estacao['id'];
                            $selecao = $estacaoAtual ? "selected='selected'" : "";
                            ?>
                            <option value ="<?=$estacao['id']?>" <?=$selecao?>>
                                <?=$estacao['nome']?>
                            </option>
                        <?php endforeach?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Temperatura:</td>
                <td><input class="form-control" required="required" type="number" step="0.01" name="temperatura" value="<?=$dado['temperatura'] ?>"></td>
            </tr>
            <tr>
                <td>Velocidade do vento:</td>
                <td><input class="form-control" required="required" type="number" name="velocidadeVento" value="<?=$dado['velocidade_vento'] ?>"></td>
            </tr>
            <tr>
                <td>Umidade:</td>
                <td><input class="form-control" required="required" type="number" name="umidade" value="<?=$dado['umidade'] ?>"></td>
            </tr>
            <tr>
                <td>Data:</td>
                <td><input class="form-control" required="required" type="text" name="data" value="<?=$dado['data'] ?>"></td>
            </tr>
            <tr>
                <td><button class="btn btn-primary" type="submit">Alterar</button></td>
            </tr>
        </table>
    </form>
<?php include("rodape.php"); ?>