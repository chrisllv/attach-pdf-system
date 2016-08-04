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
				<?php echo $this->Form->create('Generar', array('enctype'=>'multipart/form-data')); ?>
				<div class="row">
					<div class='col-sm-3'>
						<?php echo $this->Form->input('ubicacione_id', array('label'=>'Ubicación', 'class'=>'form-control', 'empty'=>'- - - Seleccione - - -')); ?>
					</div>
				</div>
				<br />
				<div class='row'>
					<div class='col-sm-9'>
							<?php echo $this->Form->input('titulo', array('label'=>'Titulo', 'class'=>'form-control', 'placeholder'=>'Titulo o informacion del anuncio')); ?>
					</div>
				</div>
				<br />
				<div class='row'>
					<div class='col-sm-9'>
							<?php echo $this->Form->input('url', array('label'=>'Url del video', 'class'=>'form-control', 'placeholder'=>'http://')); ?>
					</div>
				</div>
				<br />
				<br />
				<?php echo $this->Form->submit(__('Generar', true), array('label'=>false, 'class'=>'btn btn-primary')); ?>
				<?php echo $this->Form->end(__('')); ?>
			</div>
		</section>
	</div>

	<div class="col-sm-2">
		<p><strong>Acciones</strong></p>
		<?php echo $this->Html->link(__('Nuevo Anuncio'), array('controller' => 'anuncios', 'action' => 'add'), array('class'=>'btn btn-primary btn-block')); ?>
		<?php echo $this->Html->link(__('Listar Anuncios'), array('controller' => 'anuncios', 'action' => 'index'), array('class'=>'btn btn-default btn-block')); ?>
	</div>
</div>
