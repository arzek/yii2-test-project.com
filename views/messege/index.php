<?php if(isset($massage)): ?>
<h1>True</h1>
    <pre>
    <?php var_dump($massage) ?>
    </pre>
<?php else: ?>
<h1>False</h1>
    <pre>
    <?php var_dump($massage) ?>
    </pre>
<?php endif; ?>
