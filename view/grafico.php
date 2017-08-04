<?php
include("cabecalho.php");
include("../dao/dados-estacoes-DAO.php");
include("../util/conecta.php");

$atributo = $_POST["atributo"];

$query="select avg($atributo) as media from dados where estacao_id = 1";
$result = mysqli_query($conexao, $query);
while($var = mysqli_fetch_array($result)){
    $media = $var['media'];
    $Nmedia = number_format($media, 2, '.', ',');
}

$query2="select avg($atributo) as media from dados where estacao_id = 2";
$result2 = mysqli_query($conexao, $query2);
while($var2 = mysqli_fetch_array($result2)){
    $media2 = $var2['media'];
    $Nmedia2 = number_format($media2, 2, '.', ',');
}

$query3="select avg($atributo) as media from dados where estacao_id = 3";
$result3 = mysqli_query($conexao, $query3);
while($var3 = mysqli_fetch_array($result3)){
    $media3 = $var3['media'];
    $Nmedia3 = number_format($media3, 2, '.', ',');
}

$query4="select avg($atributo) as media from dados where estacao_id = 4";
$result4 = mysqli_query($conexao, $query4);
while($var4 = mysqli_fetch_array($result4)){
    $media4 = $var4['media'];
    $Nmedia4 = number_format($media4, 2, '.', ',');
}

$query5="select avg($atributo) as media from dados where estacao_id = 5";
$result5 = mysqli_query($conexao, $query5);
while($var5 = mysqli_fetch_array($result5)){
    $media5 = $var5['media'];
    $Nmedia5 = number_format($media5, 2, '.', ',');
}

?>
    <input type="hidden" id="media" value="<?php echo $Nmedia?>">
    <input type="hidden" id="media2" value="<?php echo $Nmedia2?>">
    <input type="hidden" id="media3" value="<?php echo $Nmedia3?>">
    <input type="hidden" id="media4" value="<?php echo $Nmedia4?>">
    <input type="hidden" id="media5" value="<?php echo $Nmedia5?>">
    <div id="container"></div>
    <?php
        if($atributo == "Temperatura"){
    ?>
            <div style="display: block">Temperatura apresentada em (Graus Celsius °C)</div>
    <?php
        }
    ?>
    <?php
        if($atributo == "Umidade"){
    ?>
            <div style="display: block">Umidade apresentada em (%)</div>
    <?php
        }
    ?>
    <?php
        if($atributo == "velocidade_vento"){
    ?>
    <div style="display: block">Velocidade vento apresentada em (km/h) </div>
    <?php
        }
    ?>
        </div>
    </div>


</body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<script>
    var mediaSp = (document).getElementById('media').value;
    var mediaSp2 = parseFloat(mediaSp);

    var mediaSm = (document).getElementById('media2').value;
    var mediaSm2 = parseFloat(mediaSm);

    var mediaPoa = (document).getElementById('media3').value;
    var mediaPoa2 = parseFloat(mediaPoa);

    var mediaFl = (document).getElementById('media4').value;
    var mediaFl2 = parseFloat(mediaFl);

    var mediaCt = (document).getElementById('media5').value;
    var mediaCt2 = parseFloat(mediaCt);

    // Create the chart
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: '<?php echo $atributo?>'
        },
        subtitle: {
            text: 'Todos os dados apresentados, estão baseadas nas informações guardadas no banco de dados.'
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Media de dados por cidades'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.1f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b><br/>'
        },

        series: [{
            name: 'Estação',
            colorByPoint: true,
            data: [{
                name: 'São Paulo',
                y: mediaSp2,
                drilldown: 'São Paulo'
            }, {
                name: 'Santa Maria',
                y: mediaSm2,
                drilldown: 'Santa Maria'
            }, {
                name: 'Porto Alegre',
                y: mediaPoa2,
                drilldown: 'Porto Alegre'
            }, {
                name: 'Florianópolis',
                y: mediaFl2,
                drilldown: 'Florianópolis'
            }, {
                name: 'Curitiba',
                y: mediaCt2,
                drilldown: 'Curitiba'
            }]
        }],
        drilldown: {
            series: [{
                name: 'Microsoft Internet Explorer',
                id: 'Microsoft Internet Explorer',
                data: [
                    [
                        'v11.0',
                        24.13
                    ],
                    [
                        'v8.0',
                        17.2
                    ],
                    [
                        'v9.0',
                        8.11
                    ],
                    [
                        'v10.0',
                        5.33
                    ],
                    [
                        'v6.0',
                        1.06
                    ],
                    [
                        'v7.0',
                        0.5
                    ]
                ]
            }, {
                name: 'Chrome',
                id: 'Chrome',
                data: [
                    [
                        'v40.0',
                        5
                    ],
                    [
                        'v41.0',
                        4.32
                    ],
                    [
                        'v42.0',
                        3.68
                    ],
                    [
                        'v39.0',
                        2.96
                    ],
                    [
                        'v36.0',
                        2.53
                    ],
                    [
                        'v43.0',
                        1.45
                    ],
                    [
                        'v31.0',
                        1.24
                    ],
                    [
                        'v35.0',
                        0.85
                    ],
                    [
                        'v38.0',
                        0.6
                    ],
                    [
                        'v32.0',
                        0.55
                    ],
                    [
                        'v37.0',
                        0.38
                    ],
                    [
                        'v33.0',
                        0.19
                    ],
                    [
                        'v34.0',
                        0.14
                    ],
                    [
                        'v30.0',
                        0.14
                    ]
                ]
            }, {
                name: 'Firefox',
                id: 'Firefox',
                data: [
                    [
                        'v35',
                        2.76
                    ],
                    [
                        'v36',
                        2.32
                    ],
                    [
                        'v37',
                        2.31
                    ],
                    [
                        'v34',
                        1.27
                    ],
                    [
                        'v38',
                        1.02
                    ],
                    [
                        'v31',
                        0.33
                    ],
                    [
                        'v33',
                        0.22
                    ],
                    [
                        'v32',
                        0.15
                    ]
                ]
            }, {
                name: 'Safari',
                id: 'Safari',
                data: [
                    [
                        'v8.0',
                        2.56
                    ],
                    [
                        'v7.1',
                        0.77
                    ],
                    [
                        'v5.1',
                        0.42
                    ],
                    [
                        'v5.0',
                        0.3
                    ],
                    [
                        'v6.1',
                        0.29
                    ],
                    [
                        'v7.0',
                        0.26
                    ],
                    [
                        'v6.2',
                        0.17
                    ]
                ]
            }, {
                name: 'Opera',
                id: 'Opera',
                data: [
                    [
                        'v12.x',
                        0.34
                    ],
                    [
                        'v28',
                        0.24
                    ],
                    [
                        'v27',
                        0.17
                    ],
                    [
                        'v29',
                        0.16
                    ]
                ]
            }]
        }
    });
</script>
</html>