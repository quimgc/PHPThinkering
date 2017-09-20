<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>

        header {

            background: #70bae3;
            padding: 2em;

        }


    </style>

</head>
<body>
    <header>




        <?php foreach ($persons as $person) : ?>

            <?php foreach ($person as $key=>$value) : ?>

                <li><?=$key . ": " . $value ;?></li>

             <?php endforeach ;?>

            <br>

        <?php endforeach ; ?>

<!---->
<!--        --><?php //foreach ($persons as $person) : ?>
<!--            <ul>-->
<!---->
<!--                <li>Ciutat: --><?//= $person['city'] ;?><!--</li>-->
<!--                <li>Sexe: --><?//= $person['Gender'] ;?><!--</li>-->
<!---->
<!--            </ul>-->
<!---->
<!--        --><?php //endforeach;?>


    </header>

</body>
</html>