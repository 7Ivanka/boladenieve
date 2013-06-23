<div class="presupuestos view">
<h2><?php  echo __('Presupuesto');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($presupuesto['Presupuesto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($presupuesto['Departamento']['nombre'], array('controller' => 'departamentos', 'action' => 'view', $presupuesto['Departamento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proceso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($presupuesto['Proceso']['nombre'], array('controller' => 'procesos', 'action' => 'view', $presupuesto['Proceso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Catalogo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($presupuesto['Catalogo']['catalogo'], array('controller' => 'catalogos', 'action' => 'view', $presupuesto['Catalogo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enero'); ?></dt>
		<dd>
			<?php echo h($presupuesto['Presupuesto']['Enero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Febrero'); ?></dt>
		<dd>
			<?php echo h($presupuesto['Presupuesto']['Febrero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marzo'); ?></dt>
		<dd>
			<?php echo h($presupuesto['Presupuesto']['Marzo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Abril'); ?></dt>
		<dd>
			<?php echo h($presupuesto['Presupuesto']['Abril']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mayo'); ?></dt>
		<dd>
			<?php echo h($presupuesto['Presupuesto']['Mayo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Junio'); ?></dt>
		<dd>
			<?php echo h($presupuesto['Presupuesto']['Junio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Julio'); ?></dt>
		<dd>
			<?php echo h($presupuesto['Presupuesto']['Julio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agosto'); ?></dt>
		<dd>
			<?php echo h($presupuesto['Presupuesto']['Agosto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Septiembre'); ?></dt>
		<dd>
			<?php echo h($presupuesto['Presupuesto']['Septiembre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Octubre'); ?></dt>
		<dd>
			<?php echo h($presupuesto['Presupuesto']['Octubre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Noviembre'); ?></dt>
		<dd>
			<?php echo h($presupuesto['Presupuesto']['Noviembre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Diciembre'); ?></dt>
		<dd>
			<?php echo h($presupuesto['Presupuesto']['Diciembre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subcidio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($presupuesto['Subcidio']['Federal'], array('controller' => 'subcidios', 'action' => 'view', $presupuesto['Subcidio']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($presupuesto['User']['username'], array('controller' => 'users', 'action' => 'view', $presupuesto['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Presupuesto'), array('action' => 'edit', $presupuesto['Presupuesto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Presupuesto'), array('action' => 'delete', $presupuesto['Presupuesto']['id']), null, __('Are you sure you want to delete # %s?', $presupuesto['Presupuesto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Presupuestos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Presupuesto'), array('action' => 'add')); ?> </li>
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
