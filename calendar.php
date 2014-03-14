<?php
function linha($semana) {
	echo "<tr>";
	
	for($i = 0; $i <= 6; $i ++) {
		
		//verifica se os �ndices do array semana foram definidos
		if (isset ( $semana [$i] )) {
			
			//exibe a posi��o correspondente ao count
			echo "<td>{$semana[$i]}</td>";
			
			//coluna vazia (se o �ndice do array n�o estiver ocupado)
		} else {
			echo "<td></td>";
		}
	}
		
		echo "</tr>";
	}
	
function calendar() {
	$dia = 1;
	$semana = array ();
	
	// 31 dias
	while ( $dia <= 31 ) {
		
		//atribuiu o valor do dia ao array semana
		array_push ( $semana, $dia );
		
		// 7 dias da semana
		if (count ( $semana ) == 7) {
			linha($semana);
			$semana = array ();
		}
		
		$dia ++;
	}
	linha ( $semana );
}
?>

<!-- Calend�rio -->
<table border="1">
	<tr>
		<th>Dom</th>
		<th>Seg</th>
		<th>Ter</th>
		<th>Qua</th>
		<th>Qui</th>
		<th>Sex</th>
		<th>Sab</th>
	</tr>
  
  <?php calendar(); ?>
</table>