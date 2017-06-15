<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(['action'=>'?r=demo/index']); ?>

    <?= $form->field($model, 'uname') ?>

    <?= $form->field($model, 'upwd') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>
