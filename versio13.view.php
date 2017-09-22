<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<ul>
    <?php foreach ($tasks as $task) : ?>

    <li>

        <?php if($task->completed) :?>



          <strike><?= $task->name;?> </strike>


            <?php else :?>
        <?= $task->name ;?>

        <?php endif ?>
<br>
        <!-- Segona opció amb tic verd-->

        <?php if($task->completed) :?>



           <?= $task->name;?> &#9989



        <?php else :?>
            <?= $task->name ;?>

        <?php endif ?>

        <br>

<!-- Tercera opció amb operador ternari-->

        <?= $task-> name ; ?> Status: <?=$task->completed ? 'Complete' : 'Incomplete' ?>






    </li>





    <?php endforeach; ?>
</ul>



</body>
</html>