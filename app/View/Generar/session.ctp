<?php
$url =  $this->Html->url("/generar/sessionl");
?>
		<table border="0">
		<tr>
		  <td width="50%">Tipo de Sesion</td>
		</tr>
		<tr>
		  <td><?php echo $this->Form->input('generar.seccion', array('style'=>'width:200px', 'label'=>false, 'class'=>'form-control', 'options' =>array(1=>'Ordinaria', 2=>'Extraordinaria'),  'onchange'=>'cargar("'.$url.'", "sessionl", this.value );', 'size'=>'5')); ?></td>
		</tr>
		</table>
<br />
	<div id="sessionl">
	</div>
	<br />
