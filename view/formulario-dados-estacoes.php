<?php

	include("cabecalho.php");
    include("../dao/estacoes-DAO.php");
    include("../util/conecta.php");

 ini_set('default_charset','UTF-8');

    $estacoes = listaEstacoes($conexao);

 ?>

<?php
if(array_key_exists("adicionado", $_GET) && $_GET["adicionado"]== true){
	?>
	<p class="text-sucess">Item adicionado com sucesso</p>
<?php }
?>
 	<h1>Formulário de dados das estações</h1>
 	<form action="../controller/adiciona-dados-estacoes.php" method="post">
 		<table class="table">
 			<tr>
 				<td>Estação:</td>
 				<td>
                    <select name="estacao_id" class="form-control">
                        <?php foreach ($estacoes as $estacao): ?>
                        <option value= "<?=$estacao['id']?>">
                            <?=$estacao['nome']?>
                            </option>;
                        <?php endforeach?>
                    </select>
                </td>
 			</tr>

			<tr>
 				<td>Temperatura:</td>
 				<td><input class="form-control" required="required" type="number" step="0.01" name="temperatura"></td>
 			</tr>
 			<tr>
 				<td>Velocidade do vento:</td>
 				<td><input class="form-control" required="required" type="number" name="velocidadeVento"></td>
 			</tr>
 			<tr>
 				<td>Umidade:</td>
 				<td><input class="form-control" required="required" type="number" name="umidade"></td>
 			</tr>
 			<tr>
 				<td>Data:</td>
 				<td><input class="form-control" required="required" type="text" name="data"></td>
 			</tr>
 			<tr>
 				<td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
 			</tr>
 		</table>
 	</form>
 <?php include("rodape.php"); ?>