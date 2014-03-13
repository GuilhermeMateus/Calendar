<?php
function linha($semana) {
	echo "
		<tr>
			
			<td>{$semana[0]}</td>
			<td>{$semana[1]}</td>
			<td>{$semana[2]}</td>
			<td>{$semana[3]}</td>
			<td>{$semana[4]}</td>
			<td>{$semana[5]}</td>
			<td>{$semana[6]}</td>
		</tr>
			";
}

function calendar() {
	$dia =1;
	$semana= array();
	
	//31 dias
	while ($dia<=31){
		array_push($semana, $dia);
		
		//7 dias da semana
		if (count($semana) == 7){
			linha($semana);
			$semana = array();
		}
		
		$dia++;
	}
}
?>

<!-- Calendário -->
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