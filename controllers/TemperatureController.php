<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class TemperatureController extends Controller {
    
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index'],
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex() {

//        $sql = "SELECT * FROM temperature ";
        $fromDate = Yii::$app->request->post('fromDate');
        $toDate = Yii::$app->request->post('toDate');
        $limit = Yii::$app->request->post('limit');
        $message = "";
        $whereQuery = " ";
        $limitQuery = 10000;
        if ($limit) {
            $limitQuery = $limit;
        }
//        if (!is_null($string)) {
//        }

        if ($fromDate && $toDate) {
            $whereQuery = " WHERE DATE_FORMAT(createdAt,'%Y-%m-%d') >= '$fromDate' AND DATE_FORMAT(createdAt,'%Y-%m-%d') <= '$toDate'";
        } else if ($fromDate) {
            $whereQuery = " WHERE DATE_FORMAT(createdAt,'%Y-%m-%d') >= '$fromDate'";
        } else if ($toDate) {
            $whereQuery = " WHERE DATE_FORMAT(createdAt,'%Y-%m-%d') <= '$toDate'";
        } else {
            
        }
        $sql = "SELECT * FROM (SELECT * FROM temperature $whereQuery ORDER BY id DESC LIMIT $limitQuery) q ORDER BY id ASC";
//        $sql .= $whereQuery;


        $temperatureValues = Yii::$app->db->createCommand($sql)->queryAll();

        $datesArray = [];
        $temperatureValuesArray = [];
        for ($i = 0; $i < sizeof($temperatureValues); $i++) {
            array_push($datesArray, $temperatureValues[$i]["createdAt"]);
            array_push($temperatureValuesArray, (int) $temperatureValues[$i]["value"]);
        }

//        $this->layout = 'main';
//        return $this->renderAjax('index', ['datesArray' => $datesArray, 'temperatureValuesArray' => $temperatureValuesArray,'fromDate'=>$fromDate,'toDate'=>$toDate]);
        return $this->render('index', ['datesArray' => $datesArray, 'temperatureValuesArray' => $temperatureValuesArray, 'fromDate' => $fromDate, 'toDate' => $toDate, 'limitQuery' => $limitQuery]);
    }

}
