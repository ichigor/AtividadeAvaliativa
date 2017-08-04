<?php
	include("cabecalho.php");
    include("../dao/estacoes-DAO.php");
    include("../util/conecta.php");

    $estacoes = listaEstacoes($conexao);

 ?>
    <br>
    <h1>Gráficos</h1>
    <form action="grafico.php" method="post">

        <table class="table">
            <tr>
                <td>Definir informação para pesquisar sua média:</td>
                <td>
                    <select name="atributo" class="form-control">
                        <option value= "Temperatura">Temperatura
                        </option>;
                        <option value= "Umidade">Umidade
                        </option>;
                        <option value= "velocidade_vento">Velocidade Vento
                        </option>;
                    </select>
                </td>
            </tr>
            <tr>
                <td><button class="btn btn-primary" type="submit">Gerar Gráfico</button></td>
            </tr>
        </table>
    </form>
<?php include("rodape.php"); ?>