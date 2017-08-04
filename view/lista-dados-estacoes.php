<?php
include("cabecalho.php");
include("../util/conecta.php");
include("../dao/dados-estacoes-DAO.php");?>

<?php
if(array_key_exists("removido", $_GET) && $_GET["removido"]== true){
    ?>
    <p class="text-sucess">Item removido com sucesso</p>
<?php }
?>

<?php
if(array_key_exists("alterado", $_GET) && $_GET["alterado"]== true){
    ?>
    <p class="text-sucess">Item alterado com sucesso</p>
<?php }
?>


<h1>Dados específicos de cada estação</h1>
<table class="table table-striped table-bordered">
    <tr >
        <td>Local estação</td>
        <td>Temperatura</td>
        <td>Velocidade Vento</td>
        <td>Umidade</td>
        <td>Data</td>
        <td>Alterar</td>
        <td>Remover</td>
    </tr>
    <?php
        $dados = listaDados($conexao);
        foreach($dados as $dado){
    ?>
    <tr>
        <td><?= $dado['estacao_nome']?></td>
        <td><?= $dado['temperatura']?></td>
        <td><?= $dado['velocidade_vento']?></td>
        <td><?= $dado['umidade']?></td>
        <td><?= $dado['data']?></td>
        <td><a class="btn btn-primary" href="altera-formulario.php?id=<?=$dado['id']?>"><span class="glyphicon glyphicon-refresh"></span></a></td>
        <td>
            <form action="../controller/remove-dados-estacoes.php" method="post">
                <input type="hidden" name="id" value="<?= $dado['id']?>">
                <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
            </form>
        </td>
    </tr>
    <?php
        }
    ?>
</table>
<?php include("rodape.php");?>