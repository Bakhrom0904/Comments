<?php

use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
?>
<?= \dominus77\sweetalert2\Alert::widget(['useSessionFlash' => true]) ?>
<div class="br-mainpanel">
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Create comment</h4>
    </div>
    <div class="br-pagebody">
        <div class="br-section-wrapper">

            <!-- Start ActiveForm -->

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'options' => ['class' => 'form-horizontal'],
            ]) ?>

            <div class="form-group">
                <div class="col-md-8">
                    <?= $form->field($model, 'name') ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-8">
                    <?= $form->field($model, 'email') ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-8">
                  <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::className(), ['mask' => '(\+\9\9\8)-99-999-99-99']);?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-8">
                    <?= $form->field($model, 'message')->textarea(['rows' => 4]) ?>
                </div>
            </div>

            <?= $form->field($model, 'verifyCode')->widget(Captcha::class, [
                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-3">{input}</div></div>',
            ]) ?>

            <div class="form-group">
                <div class="col-lg-offset-1 col-lg-11">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
                </div>
            </div>
            <?php ActiveForm::end() ?>
        </div>
    </div>

