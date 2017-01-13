<?php

use dosamigos\highcharts\HighCharts;

echo HighCharts::widget([
    'clientOptions' => [
        'chart' => [
//                'type' => 'bar'
        ],
        'title' => [
            'text' => 'Temperature'
        ],
        'xAxis' => [
            'categories' => $datesArray
        ],
        'yAxis' => [
            'title' => [
                'text' => 'Temperature (°C)'
            ],
        ],
        'tooltip' => [
            'valueSuffix' => '°C'
        ],
        'series' => [
            ['name' => 'Temperature', 'data' => $temperatureValuesArray],
        ]
    ]
]);
?>
