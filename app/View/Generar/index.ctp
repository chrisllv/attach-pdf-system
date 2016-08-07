<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header"><i class="fa fa-th"></i>Generar PDF</h3>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.html">Principal</a></li>
			<li><i class="fa fa-th"></i>Generar</li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-sm-10">
	  <section class="panel">
	  	<header class="panel-heading">Nuevo pdf</header>
    	<div class="panel-body">
				<?php echo $this->Form->create('generar', array('enctype'=>'multipart/form-data','url'=>'/generar/generar/',)); ?>
				<table border="0">
				<tr>
				  <td width="50%">Tipo de Sesion</td>
				  <td>Acta</td>
				</tr>
				<tr>
				  <td>
				   <?php
					    $url =  $this->Html->url("/generar/session");
					    ?>
						<?php echo $this->Form->input('ayuntamiento', array('style'=>'width:200px', 'label'=>'Ayuntamiento', 'class'=>'form-control',  'onchange'=>'cargar("'.$url.'", "session", this.value );', 'options' =>array(1=>'Ayutamiento 1', 2=>'Ayutamiento 2'), 'size'=>'5')); ?>
				  </td>
				  <td><?php echo $this->Form->input('generar.file',    array('label'=>false, 'type'=>'file')); ?></td>
				</tr>
				</table>


				<br />
	<div id="session">
	</div>
				<?php echo $this->Form->submit(__('Generar', true), array('label'=>false, 'class'=>'btn btn-primary')); ?>
				<?php echo $this->Form->end(__('')); ?>
			</div>
		</section>
	</div>
</div>
