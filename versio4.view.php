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
        <h2><?= $person['name'] ;?></h2>

        <ul>

            <li>Ciutat: <?= $person['city'];?></li>
            <li> Sexe: <?= $person['Gender'];?></li>

        </ul>

    </header>

</body>
</html>