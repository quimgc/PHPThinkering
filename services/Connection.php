<?php
/**
 * Created by PhpStorm.
 * User: quim
 * Date: 20/09/17
 * Time: 21:19
 */

class Connection
{

    //Amb una funció static no es pot usar $this.

    public static function connect($config) {

        try {

           // $connectionString = $config['database']['driver']. ':' .['host'] . '=127.0.0.1;dbname='.$config['name'] . ',';

            $username = $config['database']['username'];
          //  dd($username);
         $password = $config['database']['password'];

        // dd($password);

            //return new PDO('mysql:host=127.0.0.1;dbname=prova','debian-sys-maint','Fox8U2xDeZ1fBcFm');

            return new PDO('mysql:host=127.0.0.1;dbname=prova',$username,$password);


//        return new PDO($connectionString, $username, $password);

   //return new PDO($config['database']['driver']. ':' .['host'] . '=127.0.0.1;dbname=' .['username'] . ':' . ['password']);

        } catch (PDOException $e){

            die('Error connecting ' . $e->getMessage() );

        }
    }



}