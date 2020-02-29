<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Schedule</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>    

    <h1>Sorted</h1>
    <div>
        <!-- List of sorted balls -->
        <?php foreach ($balls as $ball): ?>
            
            <span class="<?= $ball->color->name ?>">
                <?= $ball->id ?>

                <!-- Ball priority -->
                <small><?= $ball->priority ?></small>
            </span>

        <?php endforeach ?>
    </div>
    

    <!-- List of baskets -->
    <?php foreach ($baskets as $basket): ?>
        
        <main class="<?= $basket->color->name ?>">
            <div>Basket <?= $basket->id ?></div>

            <!-- List of balls inside the basket -->
            <?php foreach ($basket->balls as $ball): ?>
                
                <span class="<?= $ball->color->name ?>">
                    <?= $ball->id ?>
                </span>

            <?php endforeach ?>
        </main>

    <?php endforeach ?>
</body>
</html>