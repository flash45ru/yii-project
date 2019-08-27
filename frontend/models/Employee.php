<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\helpers\ArrayHelper;

class Employee extends Model
{
    const SCENARIO_EMPLOYEE_REGISTER = 'scenario_register';
    const SCENARIO_EMPLOYEE_UPDATE = 'scenario_update';

    public $firstName;
    public $middleName;
    public $lastName;
    public $email;
    public $birthDate;
    public $hiringDate;
    public $city;
    public $position;
    public $idCode;

    public function scenarios()
    {
        return [
            self::SCENARIO_EMPLOYEE_REGISTER => ['firstName', 'middleName', 'lastName', 'birthDate', 'hiringDate', 'city', 'position', 'idCode', 'email'],
            self::SCENARIO_EMPLOYEE_UPDATE => ['firstName', 'middleName', 'lastName'],
        ];
    }

    public function rules()
    {
        return [
            [['firstName', 'middleName', 'lastName', 'birthDate'], 'required'],
            [['firstName'], 'string', 'min' => 2],
            [['lastName'], 'string', 'min' => 3],
            [['email'], 'email'],
            [['middleName'], 'required', 'on' => self::SCENARIO_EMPLOYEE_UPDATE],
            [['birthDate', 'hiringDate'], 'date', 'format' => 'php:Y-m-d'],
            [['city'], 'integer'],
            [['position'], 'string'],
            [['idCode'], 'string', 'length' => 10],
            [['hiringDate', 'city', 'position', 'idCode'], 'required', 'on' => self::SCENARIO_EMPLOYEE_REGISTER],
        ];
    }

    public function save()
    {
        return $this;
    }

    public static function find()
    {
        $sql = 'SELECT * FROM employee';
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

    public function getCitiesList()
    {
        $sql = 'SELECT * FROM city';
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        return ArrayHelper::map($result, 'id', 'name');
    }


}