<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Employee;

class EmployeeController extends Controller
{
    public function actionRegister()
    {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;

        if ($model->load(Yii::$app->request->post())) {

            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('success', 'Registered!');
            }
        }

        return $this->render('register', [
            'model' => $model,
        ]);
    }

    public function actionUpdate()
    {

    }

}