/**Crea una classe Indumento che ha un materiale come proprieta' da popolare nel costruttore.

Crea due sottoclassi Scarpa e Cappello, che avranno una proprieta' speciale ognuna 
oltre a richiamare il costruttore del parent. 

Istanziare un indumento, una scarpa e un cappello con il var_dump e verificare 
su schermo le differenze. */
<?php 
include_once __DIR__ .'/indumento.php';
include_once __DIR__ .'/scarpa.php';


$scarpa1 = new indumento('plastic', 'nike');

var_dump($scarpa1);


?>