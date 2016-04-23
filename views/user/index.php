
<table class="table table-striped">

    <tr>
        <td>№</td>
        <td>Name</td>
        <td>Number</td>
        <td>Email</td>
        <td>Bonus</td>
        <td>Date</td>
        <td>Actions</td>
    </tr>
<?php foreach ($users as $user): ?>

    <tr>
        <td> <?= $user->id ?>  </td>
        <td> <a href="/user/<?= $user->id ?>">  <?= $user->name ?> </a></td>
        <td> <?= $user->number ?> </td>
        <td> <?= $user->email ?> </td>
        <td> <?= $user->bonus ?> </td>
        <td> <?= $user->data ?></td>
        <td>  <a href="/message/write/<?=$user->id ?>"><button  class="btn btn-primary">Write </button></a>    </td>
    </tr>

<?php endforeach; ?>
</table>


