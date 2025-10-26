<?php

require_once 'classes/tarta.php'; 

$tarta1 = new Tarta();

$ingredientes = Tarta::getIngredientesValidos();
echo "\n" . "Ingredientes válidos: " . implode(', ', $ingredientes) . PHP_EOL;

$tarta1->setIngredientes(['nata', 'fresa']);
echo $tarta1 . PHP_EOL; 

echo "\n". "Ingrediente de una posición: " . $tarta1->ingredientes[0] . PHP_EOL; 

$tarta1->ingredientes = ['chocolate']; 
echo "Cambio de ingredientes: " . $tarta1 . PHP_EOL; 

$tarta1->setIngredientes(['chocolate', 'merengue']); 
echo "Error: " . $tarta1->error . PHP_EOL; 

$tarta1->setIngredientes(['chocolate', 'nata', 'fresa']); 
echo "Error: " . $tarta1->error . PHP_EOL . "\n"; 

?>
