<h1>Edit</h1>


<?php

use \yii\widgets\ActiveForm;

?>
<?php

$form = ActiveForm::begin();
?>

<?= $form->field($user,'name')->textInput() ?>
<?= $form->field($user,'number')->textInput() ?>


<div>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>

<?php
ActiveForm::end();
?>