<?php include('partials/head.php'); ?>

<header>
    <ul>
        <!-- loop through each task and display the description of it -->
        <?php foreach ($tasks as $task) : ?>
            <li><?= $task->description ?></li>
        <?php endforeach; ?>
    </ul>
</header>

<?php include('partials/footer.php');  ?>

