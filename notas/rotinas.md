Rotinas com Parâmetros Dinâmicos

function soma(){
      $p = func_get_args();
      $f = func_num_args();
      $s = 0;
      for($i=0; $i < $f; $i++){
      	$s += $p[$i];
      }}
      $r = soma(2,3,5);


Rotinas externas

include "funccamho.php";
      olah();

include	 		incluir se houver
require			requerer se não houver da erro
include_once		Incluir se já não foi requerido
require_once		requer se já não foi requerido

