<h1>Register</h1>


<?php

use \yii\widgets\ActiveForm;

?>
<?php

$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);
?>

<?= $form->field($model,'email')->textInput(['autofocus' =>true]) ?>
<?= $form->field($model,'name')->textInput(['autofocus' =>true]) ?>
<?= $form->field($model, 'image')->fileInput() ?>
<?= $form->field($model,'number')->textInput(['autofocus' =>true]) ?>
<?= $form->field($model,'referral')->textInput(['autofocus' =>true]) ?>

<?= $form->field($model,'password')->passwordInput() ?>

<div>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>

<?php
ActiveForm::end();
?>