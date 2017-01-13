<?php

use app\models\Temperature;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
?>
<div class="col-lg-12">
    <div class="col-lg-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <label>Filter</label>  
            </div>
            <div class="panel-body">
                <?php // Pjax::begin();  ?>
                <?= Html::beginForm(['temperature/index'], 'post', ['data-pjax' => '', 'class' => 'form-inline']); ?>
                <div class="col-lg-12">
                    <?= Html::label("From") ?>
                    <?= Html::input('Date', 'fromDate', Yii::$app->request->post('fromDate'), ['class' => 'form-control']) ?>
                </div>
                <div class="col-lg-12">                 
                    <?= Html::label("To") ?>
                    <?= Html::input('Date', 'toDate', Yii::$app->request->post('toDate'), ['class' => 'form-control']) ?>  
                </div>
                <div class="col-lg-12">                 
                    <?= Html::label("Show") ?><br/>
                    <?= Html::dropDownList('limit', $limitQuery, [5 => 5, 10 => 10, 20 => 20, 50 => 50, 10000 => "All"]) ?>
                </div>
                <div class="col-lg-12">
                    <br>
                    <?= Html::submitButton('Update', ['class' => 'btn btn-primary', 'name' => 'filter-button']) ?>
                </div>
                <?= Html::endForm() ?>
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <label>tempreture</label>  
            </div>
            <div class="panel-body">
                <?= $this->renderAjax('temperaturehighchart', ['datesArray' => $datesArray, 'temperatureValuesArray' => $temperatureValuesArray]); ?>
            </div>
        </div>
    </div>
</div>
<!--//Pjax::begin();
//echo Html::a("Refresh", ['temperature/index'], ['class' => 'btn btn-lg btn-primary', 'id' => 'refreshButton']);-->


<?php
//Pjax::end();
?>
<?php
//$script = <<< JS
//$(document).ready(function() {
//    setInterval(function(){ $("#refreshButton").click(); }, 10000);
//});
//JS;
//$this->registerJs($script);
?>
