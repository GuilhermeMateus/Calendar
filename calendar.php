<?php
function linha($semana) {
	echo "<tr>";
	
	for($i = 0; $i <= 6; $i ++) {
		
		//verifica se os �ndices do array semana foram definidos
		if (isset ( $semana [$i] )) {
			
			//Domingos em vermelho
			if($i==0)
				echo "<td><font color='red'>{$semana[$i]}</font></td>";
			
			//dia atual em negrito
			else if(date('d') == $semana[$i])
				echo "<td><b>{$semana[$i]}</b></td>";
			
			//dias comuns - coluna vazia (se o indice do array n�o estiver ocupado)
			else 
			echo "<td>{$semana[$i]}</td>";
			
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

			echo linha($semana);
			$semana = array ();
		}
		
		$dia ++;
	}
	linha ( $semana );
}

function hora() {
	if ((date ( 'H' ) >= 12) && (date ( 'H' ) <= 18))
		echo "Boa tarde !";
	
	else if ((date ( 'H' ) > 18) && (date ( 'H' ) <= 00))
		echo "Boa Noite !";
	
	else
		echo "Bom dia !";

	   	echo " S�o, ".date('H:i');
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
  <?php hora(); ?>
</table>