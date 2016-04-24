<h1>Write</h1>


<?php

use \yii\widgets\ActiveForm;

?>
<?php

$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);
?>

<?= $form->field($message,'title')->textInput(['autofocus' =>true]) ?>
<?= $form->field($message,'text')->textInput(['autofocus' =>true]) ?>
<?= $form->field($message, 'imageFile')->fileInput() ?>

<div>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>

<?php
ActiveForm::end();
?>