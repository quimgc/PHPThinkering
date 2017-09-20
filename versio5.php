


<?php
/**
 * Created by PhpStorm.
 * User: quim
 * Date: 18/09/17
 * Time: 21:10
 */

//els objectes no serveixen nomes per crear objectes.


class Person {
    //propietats/Caracteristiques;
    public $name;
    public $city;
    public $gender;



    //API -> Aplication Public Interface


    public function greeting()
    {

        echo "Hola " . $this->name;

    }

    //Constructors en PHP
        //Mètodes magics en PHP quan comença amb dos guions baixos __

    public function __construct($name) {

//        echo "M'estic inicialitzant ";

        $this->name = $name;

        //El constructor no sempre ha de ser així

    }



}
    //metodes <- Funcions
    //MVC -> Model s'encarrega de les dades i del comportament.


    //metode per defecte s'anomena constructor.

    //Altres metodes


//constructors
$person1 = new Person();
$person1->name = 'Quim Gonzalez Colat';
$person1->city = 'Corbera dEbre';
$person1->greeting();

$person2 = new Person();
$person2->name = 'Quim Gonzalez Colat';
$person2->city = 'Corbera dEbre';

$person3 = new Person();
$person3->name = 'Quim Gonzalez Colat';
$person3->city = 'Corbera dEbre';




$persons = [

    $person1,
    $person2,
    $person3
];

//
//$users = [
//
//    'Maria',
//    'Pepito',
//    'Alvaro',
//    'Linus'
//
//];


require 'versio5.view.php';