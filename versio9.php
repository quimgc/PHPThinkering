<?php

require 'lib/functions.php';
require 'models/Task.php';

try {

    $pdo = new PDO('mysql:host=127.0.0.1;dbname=prova','debian-sys-maint','Fox8U2xDeZ1fBcFm');


} catch (PDOException $e){

    die('Error connecting ' . $e->getMessage() );

}


$statment=$pdo->prepare('SELECT * FROM tasks');


$statment->execute();


$tasks = $statment->fetchAll(PDO::FETCH_CLASS,'Task');

require 'versio9.view.php';

?>