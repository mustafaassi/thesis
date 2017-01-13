<?php

use dosamigos\highcharts\HighCharts;

echo HighCharts::widget([
    'clientOptions' => [
        'chart' => [
//                'type' => 'bar'
        ],
        'title' => [
            'text' => 'Humidity'
        ],
        'xAxis' => [
            'categories' => $datesArray
        ],
        'yAxis' => [
            'title' => [
                'text' => 'Humidity (%)'
            ],
        ],
        'tooltip' => [
            'valueSuffix' => '%'
        ],
        'series' => [
            ['name' => 'Humidity', 'data' => $humidityValuesArray],
        ]
    ]
]);