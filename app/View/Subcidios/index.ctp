<div class="subcidios index">
	<h2><?php echo __('Subcidios');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('Federal');?></th>
			<th><?php echo $this->Paginator->sort('Estatal');?></th>
			<th><?php echo $this->Paginator->sort('Propio');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($subcidios as $subcidio): ?>
	<tr>
		<td><?php echo h($subcidio['Subcidio']['id']); ?>&nbsp;</td>
		<td><?php echo h($subcidio['Subcidio']['Federal']); ?>&nbsp;</td>
		<td><?php echo h($subcidio['Subcidio']['Estatal']); ?>&nbsp;</td>
		<td><?php echo h($subcidio['Subcidio']['Propio']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subcidio['Subcidio']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subcidio['Subcidio']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subcidio['Subcidio']['id']), null, __('Are you sure you want to delete # %s?', $subcidio['Subcidio']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Subcidio'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Presupuestos'), array('controller' => 'presupuestos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presupuesto'), array('controller' => 'presupuestos', 'action' => 'add')); ?> </li>
	</ul>
</div>
