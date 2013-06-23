<div class="presupuestos index">
	<h2><?php echo __('Presupuestos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('departamento_id');?></th>
			<th><?php echo $this->Paginator->sort('proceso_id');?></th>
			<th><?php echo $this->Paginator->sort('catalogo_id');?></th>
			<th><?php echo $this->Paginator->sort('Enero');?></th>
			<th><?php echo $this->Paginator->sort('Febrero');?></th>
			<th><?php echo $this->Paginator->sort('Marzo');?></th>
			<th><?php echo $this->Paginator->sort('Abril');?></th>
			<th><?php echo $this->Paginator->sort('Mayo');?></th>
			<th><?php echo $this->Paginator->sort('Junio');?></th>
			<th><?php echo $this->Paginator->sort('Julio');?></th>
			<th><?php echo $this->Paginator->sort('Agosto');?></th>
			<th><?php echo $this->Paginator->sort('Septiembre');?></th>
			<th><?php echo $this->Paginator->sort('Octubre');?></th>
			<th><?php echo $this->Paginator->sort('Noviembre');?></th>
			<th><?php echo $this->Paginator->sort('Diciembre');?></th>
			<th><?php echo $this->Paginator->sort('subcidio_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($presupuestos as $presupuesto): ?>
	<tr>
		<td><?php echo h($presupuesto['Presupuesto']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($presupuesto['Departamento']['nombre'], array('controller' => 'departamentos', 'action' => 'view', $presupuesto['Departamento']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($presupuesto['Proceso']['nombre'], array('controller' => 'procesos', 'action' => 'view', $presupuesto['Proceso']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($presupuesto['Catalogo']['catalogo'], array('controller' => 'catalogos', 'action' => 'view', $presupuesto['Catalogo']['id'])); ?>
		</td>
		<td><?php echo h($presupuesto['Presupuesto']['Enero']); ?>&nbsp;</td>
		<td><?php echo h($presupuesto['Presupuesto']['Febrero']); ?>&nbsp;</td>
		<td><?php echo h($presupuesto['Presupuesto']['Marzo']); ?>&nbsp;</td>
		<td><?php echo h($presupuesto['Presupuesto']['Abril']); ?>&nbsp;</td>
		<td><?php echo h($presupuesto['Presupuesto']['Mayo']); ?>&nbsp;</td>
		<td><?php echo h($presupuesto['Presupuesto']['Junio']); ?>&nbsp;</td>
		<td><?php echo h($presupuesto['Presupuesto']['Julio']); ?>&nbsp;</td>
		<td><?php echo h($presupuesto['Presupuesto']['Agosto']); ?>&nbsp;</td>
		<td><?php echo h($presupuesto['Presupuesto']['Septiembre']); ?>&nbsp;</td>
		<td><?php echo h($presupuesto['Presupuesto']['Octubre']); ?>&nbsp;</td>
		<td><?php echo h($presupuesto['Presupuesto']['Noviembre']); ?>&nbsp;</td>
		<td><?php echo h($presupuesto['Presupuesto']['Diciembre']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($presupuesto['Subcidio']['Federal'], array('controller' => 'subcidios', 'action' => 'view', $presupuesto['Subcidio']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($presupuesto['User']['username'], array('controller' => 'users', 'action' => 'view', $presupuesto['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $presupuesto['Presupuesto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $presupuesto['Presupuesto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $presupuesto['Presupuesto']['id']), null, __('Are you sure you want to delete # %s?', $presupuesto['Presupuesto']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Presupuesto'), array('action' => 'add')); ?></li>
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
