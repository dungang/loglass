<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Project;
use app\models\ImRobot;

/* @var $this yii\web\View */
/* @var $model app\models\Team */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="team-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'project_id')->dropDownList(Project::allIdToName()) ?>

    <?= $form->field($model, 'im_robot_id')->dropDownList(ImRobot::allIdToName()) ?>

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
