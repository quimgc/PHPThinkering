<?php
/**
 * Created by PhpStorm.
 * User: quim
 * Date: 20/09/17
 * Time: 21:57
 */



require 'lib/functions.php';
require 'services/Connection.php';
require 'services/QueryBuilder.php';
$config = require 'config/config.php';


$pdo = Connection::connect($config);
//comentari2

$query = new QueryBuilder($pdo);
