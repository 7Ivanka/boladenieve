<div class="subcidios form">
<?php echo $this->Form->create('Subcidio');?>
	<fieldset>
		<legend><?php echo __('Add Subcidio'); ?></legend>
	<?php
		echo $this->Form->input('Federal');
		echo $this->Form->input('Estatal');
		echo $this->Form->input('Propio');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Subcidios'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Presupuestos'), array('controller' => 'presupuestos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presupuesto'), array('controller' => 'presupuestos', 'action' => 'add')); ?> </li>
	</ul>
</div>
