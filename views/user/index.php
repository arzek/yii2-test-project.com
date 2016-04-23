
<table class="table">

    <tr>
        <td>№</td>
        <td>Name</td>
        <td>Number</td>
        <td>Email</td>
        <td>Bonus</td>
        <td>Date</td>
    </tr>
<?php foreach ($users as $user): ?>

    <tr>
        <td> <?= $user->id ?>  </td>
        <td> <a href="/user/<?= $user->id ?>">  <?= $user->name ?> </a></td>
        <td> <?= $user->number ?> </td>
        <td> <?= $user->email ?> </td>
        <td> <?= $user->bonus ?> </td>
        <td><?= $user->data ?></td>
    </tr>

<?php endforeach; ?>
</table>


