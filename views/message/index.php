<?php if(isset($massages)): ?>
        <table class="table">
            <tr>
                <td>№</td>
                <td>Title</td>
                <td>Sender</td>
                <td>Date</td>
            </tr>
            <?php foreach ($massages as $massage): ?>

            <tr>
                <td><a href="/massage/<?= $massage->id ?>">  <?= $massage->id ?>  </a></td>
                <td><?= $massage->title ?></td>
                <td><?= $massage->sender ?></td>
                <td><?= $massage->date ?></td>
            </tr>

            <?php endforeach; ?>
        </table>
<?php else: ?>
<h1>False</h1>
    <pre>
    <?php var_dump($massage) ?>
    </pre>
<?php endif; ?>
