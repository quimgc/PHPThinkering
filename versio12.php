<?php
require 'models/Task.php';
require 'bootstrap/bootstrap.php';

$tasks = $query->fetchAll('tasks');

//$tasks = fetchAlltask($pdo);
require 'versio12.view.php';


?>