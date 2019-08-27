<?php
/* @var $model frontend\models\Employee */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<h1>Welcome to our company</h1>

<?php $form = ActiveForm::begin(); ?>
<div class="row">
    <div class="col-md-3">
        <?php echo $form->field($model, 'firstName')->hint('Например: Erik'); ?>
        <?php echo $form->field($model, 'lastName'); ?>
        <?php echo $form->field($model, 'middleName'); ?>
    </div>
    <div class="col-md-3">
        <?php echo $form->field($model, 'email'); ?>
        <?php echo $form->field($model, 'birthDate'); ?>
        <?php echo $form->field($model, 'hiringDate'); ?>
    </div>
    <div class="col-md-3">
        <?php echo $form->field($model, 'position'); ?>
        <?php echo $form->field($model, 'idCode'); ?>
        <?php echo $form->field($model, 'city')->dropDownList($model->getCitiesList()); ?>
    </div>
</div>

<?php echo Html::submitButton('Send', ['class' => 'btn btn-primary']); ?>

<?php ActiveForm::end(); ?>

