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
				<div class="row">
					<div class='col-sm-3'>
						<?php echo $this->Form->input('ayuntamiento', array('label'=>'Ayuntamiento', 'class'=>'form-control', 'empty'=>'- - - Seleccione - - -','options' =>array(1=>'Ayutamiento 1', 2=>'Ayutamiento 2'))); ?>
					</div>
				</div>
				<div id="session">
						<div class="row">
							<div class='col-sm-3'>
								<?php echo $this->Form->input('seccion', array('label'=>'Sesion', 'class'=>'form-control',  'type'=>'radio', 'options' => array(1=>'Ordinaria <br>', 2=>'Extraordinaria'))); ?>
							</div>
						</div>
						<br />
						<div class="row">
							<div class='col-sm-3'>
								<?php echo $this->Form->input('acta', array('label'=>'Acta de la Session', 'class'=>'form-control',' type'=>'file')); ?>
							</div>
						</div>
						<br />
						<div class="row">
							<div class='col-sm-3'>
								<?php echo $this->Form->input('sesiones', array('label'=>'sesiones', 'class'=>'form-control', 'empty'=>'- - - Seleccione - - -','options' =>array(1=>'session 1', 2=>'session 2', 3=>'session 3'))); ?>
							</div>
						</div>
						<br />
						<div class='row'>
							<div class='col-sm-9'>
									<?php echo $this->Form->input('url', array('label'=>'Url del video', 'class'=>'form-control', 'placeholder'=>'http://')); ?>
							</div>
						</div>
						<div class='row'>
							<div class='col-sm-9'>
									<?php echo $this->Form->input('inicio', array('label'=>'inicio del video', 'class'=>'form-control')); ?>
							</div>
						</div>
						<div class='row'>
							<div class='col-sm-9'>
									<?php echo $this->Form->input('fin', array('label'=>'fin del video', 'class'=>'form-control')); ?>
							</div>
						</div>
				</div>
				<br />
				<br />
				<?php echo $this->Form->submit(__('Generar', true), array('label'=>false, 'class'=>'btn btn-primary')); ?>
				<?php echo $this->Form->end(__('')); ?>
			</div>
		</section>
	</div>
</div>
