function versioAnterior(){
//moustache


    /*
    * NPM -> forma moderna -> eina inclosa en node.
    * per instal·lar moustache: npm install moustache
    *
    * Amb entorn web
    * */



    console.log("Hello World versio 2");

//Wiki moustache


//variable preexistent, JS ja dóna aquest objecte.

//getElementById('template') busca alguna cosa que hi digui template.
//console.log(document.getElementById('template'));

    var template = document.getElementById('template');

    template.innerHTML = 'Hola Pepito';


}



//aquesta funció la crida el navegador al carregar-se.
window.onload = function() {

    //versioAnterior();

    //Utilització de moustache
    var template = document.getElementById('plantilla').innerHTML;


    //Parse/render -> JSON

    var resultat = Mustache.render(template, {name : 'Pepita'});
   // console.log(resultat);

    var resultat1 = document.getElementById('resultat');

    resultat1.innerHTML = resultat;

}