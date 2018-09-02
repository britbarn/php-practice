<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>Document</title>
    </head>
        <body>
            <header>
                <ul>
                    <!-- loop through each task and display the description of it -->
                    <?php foreach ($tasks as $task) : ?>
                        <li><?= $task->description ?></li>
                    <?php endforeach; ?>
                </ul>
            </header>
        </body>
</html>
