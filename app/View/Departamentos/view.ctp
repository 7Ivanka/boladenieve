<div class="departamentos view">
<h2><?php  echo __('Departamento');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($departamento['Departamento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($departamento['Departamento']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsable'); ?></dt>
		<dd>
			<?php echo h($departamento['Departamento']['responsable']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Departamento'), array('action' => 'edit', $departamento['Departamento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Departamento'), array('action' => 'delete', $departamento['Departamento']['id']), null, __('Are you sure you want to delete # %s?', $departamento['Departamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Presupuestos'), array('controller' => 'presupuestos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presupuesto'), array('controller' => 'presupuestos', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Presupuestos');?></h3>
	<?php if (!empty($departamento['Presupuesto'])):?>
		<dl>
			<dt><?php echo __('Id');?></dt>
		<dd>
	<?php echo $departamento['Presupuesto']['id'];?>
&nbsp;</dd>
		<dt><?php echo __('Departamento Id');?></dt>
		<dd>
	<?php echo $departamento['Presupuesto']['departamento_id'];?>
&nbsp;</dd>
		<dt><?php echo __('Proceso Id');?></dt>
		<dd>
	<?php echo $departamento['Presupuesto']['proceso_id'];?>
&nbsp;</dd>
		<dt><?php echo __('Catalogo Id');?></dt>
		<dd>
	<?php echo $departamento['Presupuesto']['catalogo_id'];?>
&nbsp;</dd>
		<dt><?php echo __('Enero');?></dt>
		<dd>
	<?php echo $departamento['Presupuesto']['Enero'];?>
&nbsp;</dd>
		<dt><?php echo __('Febrero');?></dt>
		<dd>
	<?php echo $departamento['Presupuesto']['Febrero'];?>
&nbsp;</dd>
		<dt><?php echo __('Marzo');?></dt>
		<dd>
	<?php echo $departamento['Presupuesto']['Marzo'];?>
&nbsp;</dd>
		<dt><?php echo __('Abril');?></dt>
		<dd>
	<?php echo $departamento['Presupuesto']['Abril'];?>
&nbsp;</dd>
		<dt><?php echo __('Mayo');?></dt>
		<dd>
	<?php echo $departamento['Presupuesto']['Mayo'];?>
&nbsp;</dd>
		<dt><?php echo __('Junio');?></dt>
		<dd>
	<?php echo $departamento['Presupuesto']['Junio'];?>
&nbsp;</dd>
		<dt><?php echo __('Julio');?></dt>
		<dd>
	<?php echo $departamento['Presupuesto']['Julio'];?>
&nbsp;</dd>
		<dt><?php echo __('Agosto');?></dt>
		<dd>
	<?php echo $departamento['Presupuesto']['Agosto'];?>
&nbsp;</dd>
		<dt><?php echo __('Septiembre');?></dt>
		<dd>
	<?php echo $departamento['Presupuesto']['Septiembre'];?>
&nbsp;</dd>
		<dt><?php echo __('Octubre');?></dt>
		<dd>
	<?php echo $departamento['Presupuesto']['Octubre'];?>
&nbsp;</dd>
		<dt><?php echo __('Noviembre');?></dt>
		<dd>
	<?php echo $departamento['Presupuesto']['Noviembre'];?>
&nbsp;</dd>
		<dt><?php echo __('Diciembre');?></dt>
		<dd>
	<?php echo $departamento['Presupuesto']['Diciembre'];?>
&nbsp;</dd>
		<dt><?php echo __('Federal');?></dt>
		<dd>
	<?php echo $departamento['Presupuesto']['Federal'];?>
&nbsp;</dd>
		<dt><?php echo __('Estatal');?></dt>
		<dd>
	<?php echo $departamento['Presupuesto']['Estatal'];?>
&nbsp;</dd>
		<dt><?php echo __('Propio');?></dt>
		<dd>
	<?php echo $departamento['Presupuesto']['Propio'];?>
&nbsp;</dd>
		<dt><?php echo __('User Id');?></dt>
		<dd>
	<?php echo $departamento['Presupuesto']['user_id'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Presupuesto'), array('controller' => 'presupuestos', 'action' => 'edit', $departamento['Presupuesto']['id'])); ?></li>
			</ul>
		</div>
	</div>
	