<?php


require 'lib/functions.php';
require 'models/Task.php';


$pdo = connect();

$tasks = fetchAllTask($pdo);


require 'versio10.view.php';


?>