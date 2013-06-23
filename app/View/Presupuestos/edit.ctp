<div class="presupuestos form">
<?php echo $this->Form->create('Presupuesto');?>
	<fieldset>
		<legend><?php echo __('Edit Presupuesto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('departamento_id');
		echo $this->Form->input('proceso_id');
		echo $this->Form->input('catalogo_id');
		echo $this->Form->input('Enero');
		echo $this->Form->input('Febrero');
		echo $this->Form->input('Marzo');
		echo $this->Form->input('Abril');
		echo $this->Form->input('Mayo');
		echo $this->Form->input('Junio');
		echo $this->Form->input('Julio');
		echo $this->Form->input('Agosto');
		echo $this->Form->input('Septiembre');
		echo $this->Form->input('Octubre');
		echo $this->Form->input('Noviembre');
		echo $this->Form->input('Diciembre');
		echo $this->Form->input('subcidio_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Presupuesto.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Presupuesto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Presupuestos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Procesos'), array('controller' => 'procesos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proceso'), array('controller' => 'procesos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Catalogos'), array('controller' => 'catalogos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Catalogo'), array('controller' => 'catalogos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcidios'), array('controller' => 'subcidios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcidio'), array('controller' => 'subcidios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
