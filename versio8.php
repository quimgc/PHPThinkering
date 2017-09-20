<?php

require 'lib/functions.php';

//PDO -> PHP Data Objects

//gestor de BD (mysql):host=ip


try {

    $pdo = new PDO('mysql:host=127.0.0.1;dbname=prova','debian-sys-maint','Fox8U2xDeZ1fBcFm');


} catch (PDOException $e){

    die('Error connecting ' . $e->getMessage() );

}


$statment=$pdo->prepare('SELECT * FROM tasks');


$statment->execute();

//dd($statment->fetchAll());

$result = $statment->fetchAll(PDO::FETCH_OBJ);
//
//foreach ($result as $task){
//    dump($task['name']);
//}


$tasks = $result;
//die('OK Connecting');

require 'versio8.view.php';

?>