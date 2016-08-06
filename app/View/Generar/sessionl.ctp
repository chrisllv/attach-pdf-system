<?php

$data[1][1] = "marca";
$data[1][2] = "10";
$data[1][3] = "80";
$data[1][4] = "http://www.youtube.com?v=";


$data[2][1] = "marca";
$data[2][2] = "10";
$data[2][3] = "80";
$data[2][4] = "http://www.youtube.com?v=";

$data[3][1] = "marca";
$data[3][2] = "10";
$data[3][3] = "80";
$data[3][4] = "http://www.youtube.com?v=";

$data[4][1] = "marca";
$data[4][2] = "10";
$data[4][3] = "80";
$data[4][4] = "http://www.youtube.com?v=";

$data[5][1] = "marca";
$data[5][2] = "10";
$data[5][3] = "80";
$data[5][4] = "http://www.youtube.com?v=";
?>

<br />
<div class="row">
	<div class="col-sm-10">
		<section class="panel">
		<table class="table table-bordered table-striped table-advance table-hover table-condensed table-responsive">
			<thead>
				<tr>
				    <th>Session</th>
					<th>Marca</th>
					<th>Url </th>
					<th>Inicio</th>
					<th>Fin</th>
					<th>seleccion</th>
				</tr>
			</thead>
			<tbody>
				<?php for($i=1; $i<=5; $i++){ ?>
				<tr>
				    <td>
						<input type="text" value="<?= "Session ".$i?>" size="10">
					</td>
					<td>
						<input type="text" value="<?= $data[$i][1]." ".$i?>" size="10">
					</td>
					<td>
						<input type="text" value="<?= $data[$i][4]." "?>" size="40">
					</td>
					<td>
						<input type="text" value="<?= $data[$i][2]." "?>" size="10">
					</td>
					<td>
						<input type="text" value="<?= $data[$i][3]." "?>" size="10">
					</td>
					<td>
						<input type="checkbox" value="1" name="<?= "c".$i?>" size="20">
					</td>
				</tr>
				<?php }?>
			</tbody>
		</table>
		</section>
    </div>
</div>


