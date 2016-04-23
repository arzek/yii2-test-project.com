<?php if(isset($massages)): ?>
        <table class="table">
            <tr>
                <td>№</td>
                <td>Title</td>
                <td>Sender</td>
                <td>Recipient</td>
                <td>Date</td>
            </tr>
            <?php foreach ($massages as $massage): ?>

            <tr class="<?= $massage->role() ?>">
                <td> <?= $massage->id ?>  </td>
                <td class="col-md-6"> <a href="/message/<?= $massage->id ?>">  <?= $massage->title ?> </a></td>
                <td> <a href="/user/<?= $massage->sender ?>"><?= $massage->sender ?> </a></td>
                <td> <a href="/user/<?= $massage->recipient ?>"><?= $massage->recipient ?> </a></td>
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
