<?php

$data[1][1] = "marca 1";
$data[1][2] = "10";
$data[1][3] = "20";
$data[1][4] = "https://www.youtube.com/watch?v=8Oa5objvboc";
$data[1][5] = "Nombre 1";


$data[2][1] = "marca 2";
$data[2][2] = "10";
$data[2][3] = "20";
$data[2][4] = "https://www.youtube.com/watch?v=8Oa5objvboc";
$data[2][5] = "Nombre 1";

$data[3][1] = "marca 3";
$data[3][2] = "10";
$data[3][3] = "20";
$data[3][4] = "https://www.youtube.com/watch?v=8Oa5objvboc";
$data[3][5] = "Nombre 1";

$data[4][1] = "marca 4";
$data[4][2] = "10";
$data[4][3] = "20";
$data[4][4] = "https://www.youtube.com/watch?v=8Oa5objvboc";
$data[4][5] = "Nombre 1";

$data[5][1] = "marca 5";
$data[5][2] = "10";
$data[5][3] = "20";
$data[5][4] = "https://www.youtube.com/watch?v=8Oa5objvboc";
$data[5][5] = "Nombre 1";
?>
<div class="row">
	<div class="col-sm-10">
		<section class="panel">
		<table class="table table-bordered table-striped table-advance table-hover table-condensed table-responsive">
			<thead>
				<tr>
				    <th>Marca</th>
				    <th>Nombre</th>
				    <th>Tiempo Inicio</th>
				    <th>Tiempo Fin</th>
					<th>seleccion</th>
				</tr>
			</thead>
			<tbody>
				<?php for($i=1; $i<=5; $i++){ ?>
				<tr>
				    <td>
						<?php echo $this->Form->input('generar.nombre'.$i,  array("value"=>$data[$i][5], "size"=>"10", 'label'=>false, 'class'=>'form-control')); ?>
						<?php echo $this->Form->input('generar.url'.$i,     array("value"=>$data[$i][4], "size"=>"80", 'label'=>false, 'class'=>'form-control', 'type'=>'hidden')); ?>
					</td>
				    <td>
						<?php echo $this->Form->input('generar.marca'.$i,   array("value"=>$data[$i][1], "size"=>"10", 'label'=>false, 'class'=>'form-control')); ?>
					</td>
					<td>
						<?php echo $this->Form->input('generar.inicio'.$i, array("value"=>$data[$i][2], "size"=>"10", 'label'=>false, 'class'=>'form-control')); ?>
					</td>
					<td>
						<?php echo $this->Form->input('generar.fin'.$i,     array("value"=>$data[$i][3], "size"=>"10", 'label'=>false, 'class'=>'form-control')); ?>
					</td>
					<td>
						<input type="checkbox" value="1" name="<?= "c".$i?>" size="20">
					</td>
				</tr>
				<?php }?>
				<?php echo $this->Form->input('generar.count', array("value"=>$i, "type"=>"hidden", 'label'=>false, 'class'=>'form-control')); ?>
			</tbody>
		</table>
		</section>
    </div>
</div>


