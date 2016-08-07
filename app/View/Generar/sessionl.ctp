<?php
$url =  $this->Html->url("/generar/sessionll");
?>
		<table border="0">
		<tr>
		  <td width="50%">Sesiones</td>
		</tr>
		<tr>
		  <td><?php echo $this->Form->input('generar.seccionl', array('style'=>'width:200px', 'label'=>false, 'class'=>'form-control', 'options' =>array(1=>'session 1', 2=>'session 2', 3=>'session 3', 4=>'session 4', 5=>'session 5', 6=>'session 6'),  'onchange'=>'cargar("'.$url.'", "sessionll", this.value );', 'size'=>'5')); ?></td>
		</tr>
		</table>
	    <br />
		<div id="sessionll">
		</div>
		<br />


