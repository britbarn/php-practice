<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>Document</title>
    </head>
        <body>
            <header>
                <ul>
                    <!-- loop through each animal and output as a list item -->
                    <?php foreach ($animals as $animal) : ?>
                        <li><?= $animal ?></li>
                    <?php endforeach; ?>
                </ul>
            </header>
        </body>
</html>
