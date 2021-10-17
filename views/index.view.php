<?php require('views/partials/header.php') ?>
<header>
    <h1>
        TODO APP
    </h1>
</header>

<ul>
    <?php foreach ($tasks as $task) : ?>
        <?= $task->done ? '<strike>' : '' ?>
        <li><?= $task->description ?> </li>
        <?= $task->done ? '</strike>' : '' ?>

    <?php endforeach ?>
</ul>

<?php require('views/partials/footer.php') ?>