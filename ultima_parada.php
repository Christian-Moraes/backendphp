<?php
function ultima_parada($combustivel,$consumo,$postosDeGasolina) {

$consumo = $consumo * $combustivel;
$postos = 0;

foreach ($postosDeGasolina as $i=>$value) {

  if($value <= $consumo){
      if($value >= $postos)
        $postos = $value;
    }
}

  return ($postos == 0) ? -1 : $postos;

}

?>