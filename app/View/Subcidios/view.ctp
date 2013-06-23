<div class="subcidios view">
<h2><?php  echo __('Subcidio');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subcidio['Subcidio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Federal'); ?></dt>
		<dd>
			<?php echo h($subcidio['Subcidio']['Federal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estatal'); ?></dt>
		<dd>
			<?php echo h($subcidio['Subcidio']['Estatal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Propio'); ?></dt>
		<dd>
			<?php echo h($subcidio['Subcidio']['Propio']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subcidio'), array('action' => 'edit', $subcidio['Subcidio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subcidio'), array('action' => 'delete', $subcidio['Subcidio']['id']), null, __('Are you sure you want to delete # %s?', $subcidio['Subcidio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subcidios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subcidio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Presupuestos'), array('controller' => 'presupuestos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presupuesto'), array('controller' => 'presupuestos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Presupuestos');?></h3>
	<?php if (!empty($subcidio['Presupuesto'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Departamento Id'); ?></th>
		<th><?php echo __('Proceso Id'); ?></th>
		<th><?php echo __('Catalogo Id'); ?></th>
		<th><?php echo __('Enero'); ?></th>
		<th><?php echo __('Febrero'); ?></th>
		<th><?php echo __('Marzo'); ?></th>
		<th><?php echo __('Abril'); ?></th>
		<th><?php echo __('Mayo'); ?></th>
		<th><?php echo __('Junio'); ?></th>
		<th><?php echo __('Julio'); ?></th>
		<th><?php echo __('Agosto'); ?></th>
		<th><?php echo __('Septiembre'); ?></th>
		<th><?php echo __('Octubre'); ?></th>
		<th><?php echo __('Noviembre'); ?></th>
		<th><?php echo __('Diciembre'); ?></th>
		<th><?php echo __('Subcidio Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subcidio['Presupuesto'] as $presupuesto): ?>
		<tr>
			<td><?php echo $presupuesto['id'];?></td>
			<td><?php echo $presupuesto['departamento_id'];?></td>
			<td><?php echo $presupuesto['proceso_id'];?></td>
			<td><?php echo $presupuesto['catalogo_id'];?></td>
			<td><?php echo $presupuesto['Enero'];?></td>
			<td><?php echo $presupuesto['Febrero'];?></td>
			<td><?php echo $presupuesto['Marzo'];?></td>
			<td><?php echo $presupuesto['Abril'];?></td>
			<td><?php echo $presupuesto['Mayo'];?></td>
			<td><?php echo $presupuesto['Junio'];?></td>
			<td><?php echo $presupuesto['Julio'];?></td>
			<td><?php echo $presupuesto['Agosto'];?></td>
			<td><?php echo $presupuesto['Septiembre'];?></td>
			<td><?php echo $presupuesto['Octubre'];?></td>
			<td><?php echo $presupuesto['Noviembre'];?></td>
			<td><?php echo $presupuesto['Diciembre'];?></td>
			<td><?php echo $presupuesto['subcidio_id'];?></td>
			<td><?php echo $presupuesto['user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'presupuestos', 'action' => 'view', $presupuesto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'presupuestos', 'action' => 'edit', $presupuesto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'presupuestos', 'action' => 'delete', $presupuesto['id']), null, __('Are you sure you want to delete # %s?', $presupuesto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Presupuesto'), array('controller' => 'presupuestos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
