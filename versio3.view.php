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
        <ul>

            <?php foreach($users as $user) : ?>

                    <li><?=$user;?></li>


                <?php endforeach; ?>


<!---->
<!---->
<!---->
<!--            --><?php
//
//
//
//            foreach ($users as $user) {
//
//            echo "<li>$user</li>";
//            }
//
//            ?>
        </ul>
        
<!--   <h1>-->
<!--            <ul>-->
<!---->
<!--                <li>Item 1</li>-->
<!--                <li>Item 2</li>-->
<!--                <li>Item 3</li>-->
<!--                <li>Item 4</li>-->
<!--                <li>Item 5</li>-->
<!--            </ul>-->
<!--            hello --><?//= $user ?>
<!---->
<!--        </h1>-->




    </header>

</body>
</html>