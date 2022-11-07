<?php
function retorna_menor_e_maior_valor_de_vendas($tickets) {
  
  $valor = array();
  
  foreach ($tickets as $key => $value) {
        foreach ($value as $key1 => $ret) {
          if ($value[$key1] != 0 && $value[$key1] >= 20  && $value[$key1] <= 500)
          array_push($valor, $value[$key1]);    
        }
  }
  return (array(min($valor),max($valor)));
  
  }
?>