<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>Document</title>
    </head>
        <body>
            <header>
                <ul>
                    <li><?= "Person: " . $task['assigned_to']; ?></li>
                    <li><?= "Title: " . $task['title']; ?></li>
                    <li><?= "Due date: " . $task['due']; ?></li>
                    <li>
                        <?php if ($task['completed']) : ?>
                            Status: Completed
                        <?php else : ?>
                            Status: Incomplete
                        <?php endif; ?>
                    </li>
                </ul>
            </header>
        </body>
</html>
