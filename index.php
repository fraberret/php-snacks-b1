


<?php

$partite_di_basket = array(
    array("casa" => "Squadra A", "ospite" => "Squadra B", "punti_casa" => 98, "punti_ospite" => 102),
    array("casa" => "Squadra C", "ospite" => "Squadra D", "punti_casa" => 89, "punti_ospite" => 95),
    array("casa" => "Squadra E", "ospite" => "Squadra F", "punti_casa" => 110, "punti_ospite" => 105)
    
);

/* var_dump($partite_di_basket); */

foreach ($partite_di_basket as $partita) {
    

    echo $partita['casa']." - " .$partita['ospite'] . " | " . $partita['punti_casa']." - " .$partita['punti_ospite']. "<br>";

};

?>

