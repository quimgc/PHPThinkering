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

    public static function connect() {

        try {

            return new PDO('mysql:host=127.0.0.1;dbname=prova','debian-sys-maint','Fox8U2xDeZ1fBcFm');


        } catch (PDOException $e){

            die('Error connecting ' . $e->getMessage() );

        }
    }



}