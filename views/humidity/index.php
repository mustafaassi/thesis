<?php

use dosamigos\highcharts\HighCharts;
use yii\helpers\Html;
use yii\widgets\Pjax;
?>


<div class="col-lg-12">
    <div class="col-lg-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <label>Filter</label>  
            </div>
            <div class="panel-body">
                <?php // Pjax::begin(); ?>
                <?= Html::beginForm(['humidity/index'], 'post', ['data-pjax' => '', 'class' => 'form-inline']); ?>
                <div class="col-lg-12">
                    <?= Html::label("From") ?>
                    <?= Html::input('Date', 'fromDate', Yii::$app->request->post('fromDate'), ['class' => 'form-control']) ?>
                </div>
                <div class="col-lg-12">
                    <?= Html::label("To") ?>
                    <?= Html::input('Date', 'toDate', Yii::$app->request->post('toDate'), ['class' => 'form-control']) ?>
                </div>
                <div class="col-lg-12">
                    <br>                 
                    <?= Html::submitButton('Filter', ['class' => 'btn btn btn-primary', 'name' => 'filter-button']) ?>
                </div>                   
                <?= Html::endForm() ?>

            </div>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <label>Humidity</label>  
            </div>
            <div class="panel-body">
                <?= $this->renderAjax('humidityhighchart', ['datesArray' => $datesArray, 'humidityValuesArray' => $humidityValuesArray]) ?>
            </div>
        </div>
    </div>
</div>
//