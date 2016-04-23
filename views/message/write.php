<h1>Write</h1>


<?php

use \yii\widgets\ActiveForm;

?>
<?php

$form = ActiveForm::begin(['class' => 'form-horizontal']);
?>

<?= $form->field($message,'title')->textInput(['autofocus' =>true]) ?>
<?= $form->field($message,'text')->textInput(['autofocus' =>true]) ?>

<div>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>

<?php
ActiveForm::end();
?>