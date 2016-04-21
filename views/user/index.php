<h1>User Main</h1>
<?php foreach ($users as  $user): ?>

    <h1>№<?= $user['id'] ?>   <?= $user['name'] ?>  Number: <?= $user['number'] ?>  Bonus: <?= $user['bonus'] ?> </h1>
    <br>

<?php endforeach; ?>