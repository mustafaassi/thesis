<?php
namespace app\models;

use yii\base\Model;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyTempretureFilter
 *
 * @author mustafa
 */
class MyTempretureFilter extends Model {
    
    public $fromDate;

    public function rules() {
        return [
            [['fromDate'], 'required'],
        ];
    }
    
public function attributeLabels() {
        return [
            'fromDate' => 'From Date',
        ];
    }

    //put your code here
}
