<?php
$url =  $this->Html->url("/generar/sessionl");
?>
		<table border="0">
		<tr>
		  <td width="50%">Sesion</td>
		  <td>Acta</td>
		</tr>
		<tr>
		  <td><?php echo $this->Form->input('seccion', array('style'=>'width:200px', 'label'=>false, 'class'=>'form-control', 'empty'=>'- - - Seleccione - - -', 'options' =>array(1=>'Ordinaria', 2=>'Extraordinaria'),  'onchange'=>'cargar("'.$url.'", "sessionl", this.value );')); ?></td>
		  <td><input type="file" size="10"></td>
		</tr>
		</table>
<br />
	<div id="sessionl">
	</div>
	<br />
