<?php


require 'lib/functions.php';
require 'models/Task.php';
require 'services/Connection.php';
require 'services/QueryBuilder.php';

//$connection = new Connection();

//$connection->connect();

//$pdo = connect();

$pdo = Connection::connect();

$query = new QueryBuilder($pdo);


$tasks = $query->fetchAll('tasks');

//$tasks = fetchAlltask($pdo);
require 'versio11.view.php';


?>