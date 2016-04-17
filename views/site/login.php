<h1>Login</h1>
<?php

use \yii\widgets\ActiveForm;

?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($login_model,'email')->textInput() ?>
<?= $form->field($login_model,'password')->passwordInput() ?>

<div>
    <button type="submit" class="btn btn-success">Login</button>
</div>

<?php
ActiveForm::end();
?>